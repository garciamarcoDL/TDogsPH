<?php

namespace App\Core;

class Application
{
    public function run(): void
    {
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <title>TDogsPH</title>
            <style>
                body{
                    margin:0;
                    font-family:Arial,sans-serif;
                    background:#FFFDF9;
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    height:100vh;
                }

                h1{
                    color:#6C63FF;
                    font-size:60px;
                }

                p{
                    text-align:center;
                    color:#555;
                }
            </style>
        </head>

        <body>

            <div>
                <h1>🐶 TDogsPH</h1>

                <p>
                    Framework Initialized Successfully
                </p>

            </div>

        </body>

        </html>";
    }
}