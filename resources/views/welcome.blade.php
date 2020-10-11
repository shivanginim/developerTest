<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Developer Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href = {{ asset("css/app.css") }} rel="stylesheet" />
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="section">
            <div class="container">
                <h1 class="m-b-md"> Tasks </h1>
                
                <div id="app">
                    <form>
                        <div class="form-group">
                            <input v-model="reformat_text" id="reformat_text" type="reformat_text" name="reformat_text" class="form-control" placeholder="please insert any string to reformat">
                            <input id="submitButton" type="submit" Value="ReFormat" v-on:click="reformat">
                            <p>Re formated text: @{{formatedText}} </p>
                        </div>
                        <div class="form-group">
                            <input v-model="array_rep" id="array_rep" type="array_rep" name="array_rep" class="form-control" placeholder="please insert comma seprated ex.1,2,3">
                            <input id="submit" type="submit" value="Repeat" v-on:click="repeat(array_rep)">
                            <p>Repeat array = @{{outputArray}} </p>
                        </div>
                        <div class="form-group">
                            <input v-model="cur_bin" id="cur_bin" type="cur_bin" name="cur_bin" class="form-control" placeholder="please insert binary as string ex.0;1;01;11">
                            <input id="submit" type="submit" value="Next binary" v-on:click="next_binary_number(cur_bin)">
                            <p>Binary representation of next number = @{{next_bin}} </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}" async defer></script>
    </body>
</html>
