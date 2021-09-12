<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<!-- start code     -->

  <div style="padding-top: 15px; max-width:100%;" class="row">
        <div class="offset-4 col-4">
            <form method="POST">
                <div class="form-group">
                    <label for="exampleInputmark1">Enter Your mark in Physics</label>
                    <input name="physics" type="text" class="form-control" id="exampleInputmark1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputmark2">Enter Your mark in Chemistry</label>
                    <input name="chemistry" type="text" class="form-control" id="exampleInputmark2">
                </div>
                <div class="form-group">
                    <label for="exampleInputmark3">Enter Your mark in Biology</label>
                    <input name="biology" type="text" class="form-control" id="exampleInputmark3">
                </div>
                <div class="form-group">
                    <label for="exampleInputmark4">Enter Your mark in Mathematics</label>
                    <input name="maths" type="text" class="form-control" id="exampleInputmark4">
                </div>
                <div class="form-group">
                    <label for="exampleInputmark5">Enter Your mark in Computer</label>
                    <input name="computer" type="text" class="form-control" id="exampleInputmark5">
                </div>
                <button name="get" type="submit" class="btn btn-success">Get Grade</button>
            </form>
        </div>
   </div>

<!--       php section    -->
<?php
if(isset($_POST['get'])){
    calcmarks();
}


function calcmarks(){
    $phy = $_POST['physics'];
    $chem = $_POST['chemistry'];
    $bio = $_POST['biology'];
    $math = $_POST['maths'];
    $comp = $_POST['computer'];
    $total = $phy+$chem+$bio+$math+$comp;
    $totalbypercent = ($total/500)*100;

    if($totalbypercent >= 90 AND $totalbypercent <= 100){
        echo '<p style="background-color: teal; width:310px; text-align:center; margin:30px 0 0 37%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."Total mark :".$total.'<br>'."Total mark by percentage: ".$totalbypercent."%"."<br>"."Your grade is: A ".'</p>';
    }
    else if($totalbypercent >= 80 AND $totalbypercent < 90){
        echo '<p style="background-color: teal; width:310px; text-align:center; margin:30px 0 0 37%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."Total mark :".$total.'<br>'."Total mark by percentage: ".$totalbypercent."%"."<br>"."Your grade is: B ".'</p>';
    }
    else if($totalbypercent >= 70 AND $totalbypercent < 80){
        echo '<p style="background-color: teal; width:310px; text-align:center; margin:30px 0 0 37%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."Total mark :".$total.'<br>'."Total mark by percentage: ".$totalbypercent."%"."<br>"."Your grade is: C ".'</p>';
    }
    else if($totalbypercent >= 60 AND $totalbypercent < 70){
        echo '<p style="background-color: teal; width:310px; text-align:center; margin:30px 0 0 37%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."Total mark :".$total.'<br>'."Total mark by percentage: ".$totalbypercent."%"."<br>"."Your grade is: D ".'</p>';
    }
    else if($totalbypercent >= 40 AND $totalbypercent < 60){
        echo '<p style="background-color: teal; width:310px; text-align:center; margin:30px 0 0 37%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."Total mark :".$total.'<br>'."Total mark by percentage: ".$totalbypercent."%"."<br>"."Your grade is: E ".'</p>';
    }
    else if ($totalbypercent < 40){
        echo '<p style="background-color: teal; width:310px; text-align:center; margin:30px 0 0 37%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."Total mark :".$total.'<br>'."Total mark by percentage: ".$totalbypercent."%"."<br>"."Your grade is: F ".'</p>';
    }
    else {
        echo '<p style="background-color: teal; width:310px; text-align:center; margin:30px 0 0 37%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."ERROR".'</p>';
    }
}
?>
<!--       end code    -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>