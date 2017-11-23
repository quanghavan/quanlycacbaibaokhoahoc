<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
    public function searchByField($arr){
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
			->where($arr)->paginate(5);
        return $paper;
    }
    public function listPaper(){

    }
    public function deletePaper(){

    }
    public function addPaper(){

    }
}
