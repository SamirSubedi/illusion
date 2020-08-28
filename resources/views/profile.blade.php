
@extends('layouts.app')

@section('headSection')
<style>
p.groove {
    font-family: "Times New Roman", Times, serif;
   border: 1px solid ;
   
    color: black;
  
    font-size: 16px;
    justify-content:center;

}
#abc
	{
		color:black;
	}
    a.he:hover, a.he:active {
  background-color:red;
  display: inline-block;
}
    a.he:link, a.he:visited {
  background-color:green;

  padding: 8px 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:15px;
  font-weight: normal;
}
a.hel:hover, a.hel:active {
  background-color:blue;
  display: inline-block;
}
    a.hel:link, a.hel:visited {
  background-color:blue;

  padding: 8px 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:15px;
  font-weight: normal;
}
#abc:hover
{
	text-decoration: none;
	color: green;
}
#abc:visited
{
	text-decoration: none;
	color: navy;
}


	.card:hover{
    -webkit-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.95);
    -moz-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.95);
    box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.95);
}


</style>
@endsection

@section('main-content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('/user/images/bg_1.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Bartender Profile</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


        <div class="container">
 <br>

    <div class="row">
@foreach($abc as $blog)


<div class='col-sm-12 col-md-6 col-lg-4' style="margin-top:30px;"> <div class='card text-center bg-light ' >

	 <div class="card-header">  
     <?php      $string =$blog->barten->name;
$substring = substr($string, 0, strpos($string, ' '));?>
     <i class="fas fa-user-edit"></i><?php echo $substring; ?>

  </div>
    <img class='card-img-top' src="{{ asset('storage/cv_images/'.$blog->image) }}" width='110px' height='200px'>

    <div class='card-body'>

    <a href="/bartender/{{$blog->id}}">  <h3 class='card-title'>{{$blog->name}}</h3></a>
      <p class='card-text'><i>{{$blog->email}}</i></p>
      <p class='groove'><b>Experience :3 Years experience in bartending flair and barista in event manafjabfje</b></p>
      <p class='card-text'><b>Address :Gongabu, Kathmandu</b></p>
     <div class="card-footer text-muted"><a class="he" name="he" href="{{ asset('storage/cv_files/'.$blog->cv) }}"><i class="fas fa-book-open"></i>&nbsp;&nbsp; C.V&nbsp;&nbsp;</a>
     <?php $abcd= $blog->video; if(!is_null($abcd)){?>  <a class="hel" name="hel" href="{{$blog->video}}"><i class="fas fa-book-open"></i>&nbsp;&nbsp;Promo Video&nbsp;&nbsp;</a><?php }?>
     </div>

  
    </div>
  
  </div>
 

  </div>
@endforeach
</div><br>
{!! $abc->render() !!}
</div>                 </div>
</div>
<script>
    $(document).ready(function(){

        $('.col-lg-4').hover(
            // trigger when mouse hover
            function(){
                $(this).animate({
                    marginTop: "-=1%",
                },200);
            },

            // trigger when mouse out
            function(){
                $(this).animate({
                    marginTop: "0%"
                },200);
            }
        );
    });
</script>









       
         
  
 
@endsection