<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function fibonacci(Request $request){

            $this->validate($request, [

             'text' => 'required|numeric'
           ]); //validations


            $num1 = 0;
            $num2 =1;
            $fib = $request->input('text'); // get value from input
            $counter = 0;


            while($counter < $fib){

                  $num3 = $num2 + $num1;  // = 1
                  $num1 = $num2;
                  $num2 = $num3;
                  $counter = $counter + 1;

                  $output[] = $num1.',';
              }


            return view('index')->with('output', $output);



    }


    public function palindrome(Request $request){

              $this->validate($request, [

               'text' => 'required|regex:/^[a-zA-Z]+$/u|max:255'
             ]);


              $word = $request->input('text'); // get inputed word
              $word = strtolower($word); // convert all string to lowercase to avoid conflicts



              $word_length = strlen($word) - 1; // get word length
              $output = '';

              for ($x = $word_length; $x>=0; $x--){

                $output .= $word[$x]; // reverse the word

              }

              if ($output == $word)// check if the reversed word match the inputed word
               {
                  return redirect('palindrome')->with('success', 'The word "' .$output. '"is palindrome');
              }
              else {
                return redirect('palindrome')->with('error', 'The word "' .$word. '" is not palindrome');
              }


            }

      public function numsort(Request $request){


                      $this->validate($request, [

                      'first' => 'required|numeric',
                      'second' => 'required|numeric',
                      'third' => 'required|numeric',
                      'fourth' => 'required|numeric',
                      'fifth' => 'required|numeric',
                    ]); //validations


                  $first = $request->input('first');
                  $second = $request->input('second');
                  $third = $request->input('third');
                  $fourth = $request->input('fourth');
                  $fifth = $request->input('fifth');

                  $nums = array($first,$second,$third,$fourth,$fifth);

                  sort($nums);

                  foreach($nums as $num){

                  $output[] = $num.'<br>';
                  }



                    return view('numsort')->with('output',  $output);


                }

      public function anagram(Request $request){

                $this->validate($request, [

                 'first' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
                 'second' => 'required|regex:/^[a-zA-Z]+$/u|max:255'

                   ]); //validations

                   $word1 = $request->input('first');
                   $word2 = $request->input('second');



                   if (count_chars($word1, 1) == count_chars($word2, 1))// to check if both inputs are anagram using count_chars with a mode value of 1
                      {
                        return redirect('anagram')->with('success', 'The words are Anagram');
                      }
                      else
                      {
                      return redirect('anagram')->with('error', 'The words are not Anagram');
                      }



          }


}
