<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Exception;

class PaperManager extends Model
{
    public function searchByPhrase($phrase){
        $query = "
          SELECT paper.title as title, surname,givenName,author.url as aurl,paper.url as uurl,
          paper.issn as issn,paper.coverDate as coverDate,paper.abstract as abstract
          FROM author,author_paper, paper WHERE
          MATCH(title, issn, authors, abstract)
          AGAINST( '" . $phrase . "' IN NATURAL LANGUAGE MODE)
          AND author.id = author_paper.authorid
          AND author_paper.paperid = paper.id";
        $paper = DB::select( DB::raw($query));
        return $paper;
    }
    public function searchByField($arr,$givenName){
        $paper = DB::table('author')
			->select('paper.title as title', 'surname','givenName','author.url as aurl','paper.url as uurl',
					'paper.issn as issn','paper.coverDate as coverDate','paper.abstract as abstract'
				)
			->join('author_paper','author.id','=','author_paper.authorid')
            ->join('paper','author_paper.paperid','=','paper.id')
			->join('author_institute','author.id','=','author_institute.author_id')
			->join('institute','author_institute.institute_id','=','institute.id')
			->join('city','institute.city_id','=','city.id')
			->join('country','city.country_id','=','country.id')
			->where($arr)->orWhere($givenName)->paginate(5);
        return $paper;
    }
    public function listPaper(){

    }
    public function deletePaper(){

    }
    public function addData($request){
        //kiểm tra và đọc các file
        $all_csv_file = array();
        $error = array();
        //kiểm tra và đọc file paper
        $file = $request->file('paper');
        $content = $this -> check_csv_file($file -> path(), 8, array());
        $all_csv_file["paper"] = $content;
        if ($content === false){
            array_push($error, 'Định dạng file paper.csv không hợp lệ');
        }
        //kiểm tra và đọc file author
        $file = $request->file('author');
        $content = $this -> check_csv_file($file -> path(), 5, array());
        $all_csv_file["author"] = $content;
        if ($content === false){
            array_push($error, 'Định dạng file author.csv không hợp lệ');
        }
        //kiểm tra và đọc file author_paper
        $file = $request->file('author_paper');
        $content = $this -> check_csv_file($file -> path(), 2, array());
        $all_csv_file["author_paper"] = $content;
        if ($content === false){
            array_push($error, 'Định dạng file author_paper.csv không hợp lệ');
        }
        //kiểm tra và đọc file subject
        $file = $request->file('subject');
        $content = $this -> check_csv_file($file -> path(), 2, array(0));
        $all_csv_file["subject"] = $content;
        if ($content === false){
            array_push($error, 'Định dạng file subject.csv không hợp lệ');
        }
        //kiểm tra và đọc file author_subject
        $file = $request->file('author_subject');
        $content = $this -> check_csv_file($file -> path(), 2, array(1));
        $all_csv_file["author_subject"] = $content;
        if ($content === false){
            array_push($error, 'Định dạng file author_subject.csv không hợp lệ');
        }
        //kiểm tra và đọc file institute
        $file = $request->file('institute');
        $content = $this -> check_csv_file($file -> path(), 3, array(0, 1));
        $all_csv_file["institute"] = $content;
        if ($content === false){
            array_push($error, 'Định dạng file institute.csv không hợp lệ');
        }
        //kiểm tra và đọc file author_institute
        $file = $request->file('author_institute');
        $content = $this -> check_csv_file($file -> path(), 2, array(1));
        $all_csv_file["author_institute"] = $content;
        if ($content === false){
            array_push($error, 'Định dạng file author_institute.csv không hợp lệ');
        }
        //kiểm tra và đọc file city_state
        $file = $request->file('city_state');
        $content = $this -> check_csv_file($file -> path(), 3, array(0, 1));
        $all_csv_file["city_state"] = $content;
        if ($content === false){
            array_push($error, 'Định dạng file city_state.csv không hợp lệ');
        }
        //kiểm tra và đọc file country
        $file = $request->file('country');
        $content = $this -> check_csv_file($file -> path(), 2, array(0));
        $all_csv_file["country"] = $content;
        if ($content === false){
            array_push($error, 'Định dạng file country.csv không hợp lệ');
        }
        //thông báo lỗi nếu có
        if(count($error) > 0){
            return redirect()->route('add_data', ['success_message'=>  '', 'error_message' => $error]);
        }

        try{
            $this -> addDataToDB($all_csv_file);
        }
        catch(Exception $e){
            return redirect()->route('add_data', ['success_message'=>  "", 'error_message' => array($e -> getMessage())]);
        }
        return redirect()->route('add_data', ['success_message'=>  "Thêm dữ liệu thành công", 'error_message' => '']);
    }
    private function check_csv_file($file_path, $num_col, $digit_cols){//false or return content of csv file
        $f = fopen($file_path, 'r');
        $result = array();
        while(($row = fgetcsv($f, 1500)) !== false){
            if (count($row) != $num_col){
                return false;
            }
            foreach($digit_cols as $i){
                if(!is_numeric($row[$i])){
                    return false;
                }
            }
            array_push($result, $row);
        }
        return $result;
    }

    private function addDataToDB($all_csv_file){
        //check integration
        try {
            $this -> checkIntegration($all_csv_file);
        }
        catch (Exception $e){
            throw $e;
        }
        //add to db
        //thêm subject, lấy giá trị id trong cơ sở dữ liệu
        $subjects = $all_csv_file['subject'];
        for($i = 0; $i < count($subjects); $i++){
            $find = DB::table('subject')-> select('id')->where('name', '=', $subjects[$i][1]) -> first();
            if(count($find)){
                $subjects[$i]['db_id'] = $find->id;
            }
            else{
                $id = DB::table('subject') -> insertGetId(['name' => $subjects[$i][1]]);
                $subjects[$i]['db_id'] = $id;
            }
        }
        usort($subjects, function ($arr1, $arr2) {
            return intval($arr1[0]) - intval($arr2[0]);
        });


        //thêm author, lấy giá trị id trong csdl
        $authors = $all_csv_file['author'];
        for($i = 0; $i < count($authors); $i++){
            $url = $authors[$i][4];
            if(!$url){
                throw new Exception("Trường url trong hàng thứ " . ($i + 1) . " của file author.csv rỗng, cơ sở dữ liệu không được cập nhật.");
            }
            $find = DB::table('author')->select('id') -> where ('url', '=', $url) -> first();
            if(count($find)){
                $authors[$i]['db_id'] = $find->id;
            }
            else{
                while(1){
                    $id = $this->randomId(12);
                    try{
                        DB::table('author')-> insert(['id'=>$id, 'email' => $authors[$i][1], 
                            'givenName' => $authors[$i][2], 'surname' => $authors[$i][3], 
                            'url' => $authors[$i][4]]);
                    }
                    catch(Exception $e){
                        continue;
                    }
                    $authors[$i]['db_id'] = $id;
                    break;
                }
            }
        }
        usort($authors, function ($arr1, $arr2) {
            return strcmp($arr1[0], $arr2[0]);
        });

        
        //thêm paper, lấy giá trị id trong csdl
        $papers = $all_csv_file['paper'];
        for($i = 0; $i < count($papers); $i++){
            $url = $papers[$i][3];
            if(!$url){
                throw new Exception("Trường url trong hàng thứ " . ($i +1) . " của file paper.csv rỗng, cơ sở dữ liệu không được cập nhật.");
            }
            $find = DB::table('paper')->select('id') -> where ('url', '=', $url) -> first();
            if(count($find)){
                $papers[$i]['db_id'] = $find->id;
            }
            else{
                $m = preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $papers[$i][2]);
                if($m !== 1)
                {
                    throw new Exception("Trường cover_date ở file paper.csv dòng thứ " . ($i+1) . " không đúng định dạng");
                }
                while(1){
                    $id = $this->randomId(20);
                    try{
                        DB::table('paper') -> insert(['id'=>$id, 'title'=>$papers[$i][1], 
                            'coverDate' => $papers[$i][2], 'url' => $papers[$i][3], 
                            'issn' => $papers[$i][4], 'keywords' => $papers[$i][5], 
                            'abstract' => $papers[$i][6], 'authors' => $papers[$i][7]]);
                    }
                    catch(Exception $e){
                        continue;
                    }
                    $papers[$i]['db_id'] = $id;
                    break;
                }
            }
        }
        usort($papers, function ($arr1, $arr2) {
            return strcmp($arr1[0], $arr2[0]);
        });

    
        //thêm country, lấy giá trị id trong csdl
        $countries = $all_csv_file['country'];
        for($i = 0; $i < count($countries); $i++){
            $name = $countries[$i][1];
            if(!$name){
                throw new Exception("Trường name trong hàng thứ " . ($i + 1) . " của file country.csv rỗng, cơ sở dữ liệu không được cập nhật.");
            }
            $find = DB::table('country')->select('id') -> where ('name', '=', $name) -> first();
            if(count($find)){
                $countries[$i]['db_id'] = $find->id;
            }
            else{
                $id = DB::table('country') -> insertGetId(['name'=>$name]);
                $countries[$i]['db_id'] = $id;
            }
        }
        foreach($countries as $key => $c){
            $countries[$key][0] = intval($c[0]);
        }
        usort($countries, function ($arr1, $arr2) {
            return $arr1[0] - $arr2[0];
        });

        
        //thêm city_states, thay country_id bằng id của country trong csdl
        //thay thế country_id
        $city_states = $all_csv_file['city_state'];
        $p = '';
        foreach($city_states as $key => $row){
            $p = $this->binarySearch(intval($row[1]), $countries, 0, count($countries) -1, 'cmp_in_country');
            $city_states[$key][1] = $countries[$p]['db_id'];
        }
        //them vao db
        foreach($city_states as $key => $row){
            //kiểm tra nếu tồn tại trong cơ sở dữ liệu
            $find = DB::table('city')->join('country', 'city.country_id', '=', 'country.id')
                                    ->select ('city.id as id')
                                    ->where([['city.name', '=', $row[2]], 
                                            ['country.name', '=', $countries[$p][1]]])
                                    ->first();
            if(count($find)){
                $city_states[$key]['db_id'] = $find->id;
            }
            else{
                $id = DB::table('city')->insertGetId(['country_id'=>$row[1], 'name'=>$row[2]]);
                $city_states[$key]['db_id'] = $id;
            }
        }
        foreach($city_states as $key => $c){
            $city_states[$key][0] = intval($c[0]);
        }
        usort($countries, function ($arr1, $arr2) {
            return $arr1[0] - $arr2[0];
        });


        
        //thêm institute, thay city_id bằng id của city trong csdl
        //thay thế city_id
        $institutes = $all_csv_file['institute'];
        $p = '';
        foreach($institutes as $key => $row){
            $p = $this->binarySearch(intval($row[1]), $city_states, 0, count($city_states) -1, 'cmp_in_city_states');
            $institutes[$key][1] = $city_states[$p]['db_id'];
        }
        //them vao db
        foreach($institutes as $key => $row){
            //kiểm tra nếu tồn tại trong cơ sở dữ liệu
            $find = DB::table('institute')->join('city', 'institute.city_id', '=', 'city.id')
                                    ->select ('institute.id as id')
                                    ->where([['institute.name', '=', $row[2]], 
                                            ['city.name', '=', $city_states[$p][2]]])
                                    ->first();
            if(count($find)){
                $institutes[$key]['db_id'] = $find->id;
            }
            else{
                $id = DB::table('institute')->insertGetId(['city_id'=>$row[1], 'name'=>$row[2]]);
                $institutes[$key]['db_id'] = $id;
            }
        }
        foreach($institutes as $key => $c){
            $institutes[$key][0] = intval($c[0]);
        }
        usort($institutes, function ($arr1, $arr2) {
            return $arr1[0] - $arr2[0];
        });

        //thêm author_institute, thay author_id, institute_id bằng giá trị tương ứng trong csdl
        $author_institute = $all_csv_file['author_institute'];
        //thay thế author_id và institute_id
        foreach($author_institute as $key=>$row){
            $p1 = $this->binarySearch($author_institute[$key][0], $authors, 0, count($authors) - 1, 'cmp_in_author');
            $author_institute[$key][0] = $authors[$p1]['db_id'];
            $p2 = $this->binarySearch(intval($author_institute[$key][1]), $institutes, 0, count($institutes) - 1, 'cmp_in_institute');
            $author_institute[$key][1] = $institutes[$p2]['db_id'];
        }
        //them vao db
        foreach($author_institute as $key => $row){
            //kiểm tra nếu tồn tại trong cơ sở dữ liệu
            $find = DB::table('author_institute')
                        ->where([['author_id', '=', $author_institute[$key][0]], 
                                ['institute_id', '=', $author_institute[$key][1]]])
                        ->first();
            //nếu không thì thêm
            if(!count($find)){
                DB::table('author_institute')->insert(['author_id'=>$author_institute[$key][0], 
                            'institute_id'=>$author_institute[$key][1]]);
            }
        }


        //thêm author_subject, thay author_id, subject_id bằng giá trị tương ứng trong csdl
        $author_subject = $all_csv_file['author_subject'];
        //thay thế author_id, subject_id
        foreach($author_subject as $key => $row){
            $p1 = $this->binarySearch($author_subject[$key][0], $authors, 0, count($authors) - 1, 'cmp_in_author');
            $author_subject[$key][0] = $authors[$p1]['db_id'];
            $p2 = $this->binarySearch(intval($author_subject[$key][1]), $subjects, 0, count($subjects) - 1, 'cmp_in_subject');
            $author_subject[$key][1] = $subjects[$p2]['db_id'];
        }
        //them vao db
        foreach($author_subject as $key => $row){
            //kiểm tra nếu tồn tại trong cơ sở dữ liệu
            $find = DB::table('author_subject')
                        ->where([['author_id', '=', $author_subject[$key][0]], 
                                ['subject_id', '=', $author_subject[$key][1]]])
                        ->first();
            //nếu không thì thêm
            if(!count($find)){
                DB::table('author_subject')->insert(['author_id'=>$author_subject[$key][0], 
                            'subject_id'=>$author_subject[$key][1]]);
            }
        }


        //thêm author_paper, thay paperid, authorid bằng giá trị tương ứng trong csdl
        //thay paperid, authorid
        $author_paper = $all_csv_file['author_paper'];
        foreach($author_paper as $key=>$row){
            $p1 = $this->binarySearch($author_paper[$key][0], $authors, 0, count($authors) - 1, 
                                        'cmp_in_author');
            $author_paper[$key][0] = $authors[$p1]['db_id'];
            $p2 = $this->binarySearch($author_paper[$key][1], $papers, 0, count($papers) - 1, 'cmp_in_paper');
            $author_paper[$key][1] = $papers[$p2]['db_id'];
        }
        //them vao db
        foreach($author_paper as $key=>$row){
            //kiểm tra nếu tồn tại trong cơ sở dữ liệu
            $find = DB::table('author_paper')
                            ->where([['authorid', '=', $author_paper[$key][0]], 
                                        ['paperid', '=', $author_paper[$key][1]]])
                            ->first();
            //nếu không thì thêm
            if(!count($find)){
                DB::table('author_paper')->insert(['authorid'=>$author_paper[$key][0], 
                        'paperid'=>$author_paper[$key][1]]);
            }
        }
    }

    private function randomId($num){
        $id ='';
        for ($i = 0; $i < $num; $i++){
            $id .= rand(0, 9);
        }
        return $id;
    }
    private function checkIntegration($all_csv_file){
        //kiểm tra liên kết giữa city_state và country
        $arr1 = array();
        $arr2 = array();
        foreach($all_csv_file['city_state'] as $row){
            array_push($arr1, trim($row[1]));
        }
        foreach($all_csv_file['country'] as $row){
            array_push($arr2, trim($row[0]));
        }
        if(!$this -> check2F($arr1, $arr2)){
            throw new Exception ("File city_state.csv và country.csv không được liên kết chính xác.");
        }
        //kiểm tra liên kết giữa city và institute
        foreach($all_csv_file['institute'] as $row){
            array_push($arr1, trim($row[1]));
        }
        foreach($all_csv_file['city_state'] as $row){
            array_push($arr2, trim($row[0]));
        }
        if(!$this -> check2F($arr1, $arr2)){
            throw new Exception ("File city_state.csv và institute.csv không được liên kết chính xác.");
        }
        //kiểm tra liên kết giữa institute và author_institute
        foreach($all_csv_file['author_institute'] as $row){
            array_push($arr1, trim($row[1]));
        }
        foreach($all_csv_file['institute'] as $row){
            array_push($arr2, trim($row[0]));
        }
        if(!$this -> check2F($arr1, $arr2)){
            throw new Exception ("File author_institute.csv và institute.csv không được liên kết chính xác.");
        }
        //kiểm tra liên kết giữa author và author_institute
        foreach($all_csv_file['author_institute'] as $row){
            array_push($arr1, trim($row[0]));
        }
        foreach($all_csv_file['author'] as $row){
            array_push($arr2, trim($row[0]));
        }
        if(!$this -> check2F($arr1, $arr2)){
            throw new Exception ("File author.csv và author_institute.csv không được liên kết chính xác.");
        }
        //kiểm tra liên kết giữa subject và author_subject
        foreach($all_csv_file['author_subject'] as $row){
            array_push($arr1, trim($row[1]));
        }
        foreach($all_csv_file['subject'] as $row){
            array_push($arr2, trim($row[0]));
        }
        if(!$this -> check2F($arr1, $arr2)){
            throw new Exception ("File subject.csv và author_subject.csv không được liên kết chính xác.");
        }
        //kiểm tra liên kết giữa author_subject và author
        foreach($all_csv_file['author_subject'] as $row){
            array_push($arr1, trim($row[0]));
        }
        foreach($all_csv_file['author'] as $row){
            array_push($arr2, trim($row[0]));
        }
        if(!$this -> check2F($arr1, $arr2)){
            throw new Exception ("File author_subject.csv và author.csv không được liên kết chính xác.");
        }
        //kiểm tra liên kết giữa author và author_paper
        foreach($all_csv_file['author_paper'] as $row){
            array_push($arr1, trim($row[0]));
        }
        foreach($all_csv_file['author'] as $row){
            array_push($arr2, trim($row[0]));
        }
        if(!$this -> check2F($arr1, $arr2)){
            throw new Exception ("File author.csv và author_paper.csv không được liên kết chính xác.");
        }
        //kiểm tra liên kết giữa author_paper và paper
        foreach($all_csv_file['author_paper'] as $row){
            array_push($arr1, trim($row[1]));
        }
        foreach($all_csv_file['paper'] as $row){
            array_push($arr2, trim($row[0]));
        }
        if(!$this -> check2F($arr1, $arr2)){
            throw new Exception ("File author_paper.csv và paper.csv không được liên kết chính xác.");
        }
        //passed all
        return true;
    }

    private function check2F($arr1, $arr2){//kiểm tra các thành phần của $arr1 có nằm trong $arr2
        sort($arr2);
        foreach($arr1 as $x){
            if($this->binarySearch($x, $arr2, 0, count($arr2) - 1, 'cmp_string') === false){
                return false;
            }
        }
        return true;
    }

    private function binarySearch($value, array $array, $start, $end, $function){//tìm kiếm nhị phân
        if($end<$start) return false;
        
        $middle = floor(($end + $start)/2);
        $cmp = call_user_func(array($this, $function), $value, $array[$middle]) ;
        if($cmp == 0) 
            return $middle;
        elseif ($cmp < 0) 
            return $this -> binarySearch($value, $array, $start, $middle-1, $function);
        else 
            return $this -> binarySearch($value, $array, $middle+1, $end, $function);
    }
    //các hàm so sánh dùng trong tìm kiếm nhị phân
    private function cmp_string($v1, $v2){
        return strcmp($v1, $v2);
    }
    function cmp_in_country($int, $countries_row){
        return $int - $countries_row[0];
    }
    function cmp_in_city_states($int, $city_state_row){
        return $int - $city_state_row[0];
    }
    function cmp_in_author($str, $author_row){
        return strcmp($str, $author_row[0]);
    }
    function cmp_in_institute($int, $institute_row){
        return $int - $institute_row[0];
    }
    function cmp_in_subject($int, $subject_row){
        return $int - $subject_row[0];
    }
    function cmp_in_paper($str, $paper_row){
        return strcmp($str, $paper_row[0]);
    }
}
