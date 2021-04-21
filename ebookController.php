<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookController extends Controller
    {
        public function about (){
            return view('about');
        }
    
        public function list(){
    
            $books=[ 
                'book'=>[
                    [
                        'title' => 'Basic Economics',
                        'isbn' =>'8764',
                        'category' => 'Education',
                        'page'=> 120
                    ], 
                    [
                        'title' => 'Clean Code',
                        'isbn' =>'1412',
                        'category' => 'Computer Science',
                        'page'=> 180
                    ],
                    [
                        'title' => 'Plant Physiology',
                        'isbn' =>'5982',
                        'category' => 'Life science',
                        'page'=> 94
                    ],
                    [
                        'title' => 'Openintro Statistics',
                        'isbn' =>'9613',
                        'category' => 'Statistics',
                        'page'=> 456
                    ]   
                ]
            ];
            return view ('list', compact('books'));
        }
    }
