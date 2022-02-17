<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


            <style>

            @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');


                /*CARDS*/
                .title{
                    font-size: 2.1rem;
                }

                .Product{
                    margin: 5vw;
                    overflow: hidden;
                    border-radius: 5%;
                }

                .cardTitleContainer{
                    font-size: 2.1rem;
                    background-color: #119DA4;
                    color: #fff;
                    font-family:monospace;
                    text-align: center;
                }

                .card-title{
                    font-size: 2vw;
                    justify-content: center;
                    text-decoration: none;
                }
                .card-text{
                    font-size: 15px;
                }

                .card-body{
                    padding: 0;
                    text-align: center;
                    margin: 2vw 1.5vw 2vw 1.5vw;
                    font-family:monospace;
                    font-size: 2vw;
                }

                #cardButton{
                    background-color: #119DA4;
                    border-color: #119DA4;
                }

                #cardButton:hover{
                    background-color: #13505B;
                }


            </style>
    </head>
    
    
{{-- CARDS --}}

<h4 class="title"> Nuestros cursos </h4>


<div class="Product" style="width: 18rem;">

        <div class="cardTitleContainer" > 
        <h5 class="card-title">Card title</h5>
        </div>

        <div class="card-body">
        <img src="..." class="card-img-top" alt="img" width="70px" height="70px">

        <div class="product__footer">
            <p class="card-text">Categoría:  </p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan ornare risus, id commodo nulla. Curabitur tellus ipsum, rutrum quis ligula ut, consectetur finibus libero.</p>
            <p class="card-text">Precio: $ </p>
            <a href="#" class="btn btn-primary" id="cardButton">Agregar a mis cursos</a>
        </div>
    </div>
</div>


</html>

