<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 40;
                font-size: 13px;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                padding: 5% 10%;
            }

            .title {
                font-size: 30px;
            }

            .small_title {
                font-size: 17px;
                font-weight: bold;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .p-t {
                padding-top: 20px;
            }

            .text-center {
                text-align: center;
            }

            .small-font {
                font-size: 9px;
                font-style: italic;
            }

            table, td, th {  
                border: 1px solid #ddd;
                text-align: left;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 5px 10px;
            }

            h5 {
                font-size: 15px;
            }
			p { 
				text-align: justify
				}
			h4 { 
				text-align: right
				}
            footer{
                text-align: center
            }
        </style>
    </head>
    <body>
        <div class="content">
            <table>
                <tr>
                    <th class="text-center" width="10%"><img src="{{ url('images/htp.png') }}" width="66" height="80"></th>
                    <th class="title">HeiTech Padu Berhad</th>
                </tr>
            </table>
            <br>
			@foreach ($result as $data)
			<h4>Tarikh : {{$data->date}}</h4>
			
			<p>{{$data->title_1}}</p>
			<p>{{$data->title_2}}</p>


           <p>No KPPN : </p>
           <p></p>
            <hr>

            <p></p>
            <p>{{$data->body_3}}</p>
            <p>{{$data->body_4}}</p>
           
           <p>{{$data->body_5}}</p>
			
		   <p></p>
		   <p></p>
		   <p>{{$data->body_6}}</p>
			</p></p>
		   <b>{{$data->motto_1}}</b>
		   <br>
           <br>
		   <p>{{$data->body_7}}</p>
			<br>
			<br>
			<br>
			</p>{{$data->signature_1}}</p>
			<p>{{$data->signature_2}}</p>
			<p>{{$data->signature_3}}</p>
			<p>{{$data->signature_4}}</p>
			<p>{{$data->signature_5}}</p>
			<p>{{$data->signature_6}}</p>
			<p>{{$data->signature_7}}</p>
        
        </div>
           
            <footer>{{$data->motto_2}}</footer>
            @endforeach
    </body>
    
</html>
