<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Goal Tracker
                </div>

                <div class="links">
                    <a href="/docs">API Documentation</a>
                    <a href="https://github.com/bluefission/goaltracker">GitHub</a>
                </div>

                <div>
                    <h1>Context</h1>
                    <p>
                        So this was thrown together as a technical test for a backend developer position. 
                        Now I LOVE goal setting. I even facilitate a workshop with a non profit twice a month teaching goal setting
                        and over coming barriers. I created a goal setting journal. I am publishing a book on using ritual habits to achieve goals.
                    </p>
                    <p>
                        I got carried away with this project and <a href="img/trello.png" target="_blank">started <strong>really</strong> architecting it</a>, and had to slow myself down as the test said "it doesn't need to function". So I was in the middle of creating tests on semaphore and preparing for red/green/refactor sprints, then suddenly realized that I really ought not do that if I want to deliver this test. This is far from "done" but it *is* the scaffolding that was requested. After all, I had a clear goal.
                    </p>
                    <p>
                        So I think I will definitely continue to build this out as a side project. Ironically, I used like 3 different goal management/tracking packages as I put this together (one pomodoro tool, Trello, and my own personal one) so why does the world need another goal tracking tool? Simple. I'm applying to a position outside of my city, which means that the course I facilitate for the local non-profit will be down one volunteer leader. It think it would be very cool to leave them a tool that can help the program participants even beyond their sessions.
                    </p>
                    <p>
                        Double irony, the group I work with helps individuals with employment barriers find jobs in a struggling economic situation. Incarceration, single parenting, lack of transportation, illness, language, etc. I help them track and chart themselves toward finding and attaining work, then moving on to financial ease and fulfilling labor. If I left the city for my own career, I'd want them to have something to keep with them after they leave the program themselves. It's an audience I know intimately with a clear series of shared problems. They don't need Trello a project management tool or a shiny silicon valley app. They need a very simple, very free package to help them plan and focus.
                    </p>
                    <p> 
                        THAT SAID if you are reviewing this application for my own employment, thank you for the opportunity. And for the inspiration to create a gift for my town. You can find the <a href="https://github.com/bluefission/goaltracker" target="_blank">GitHub project here</a>, <a href="/docs" target="_blank"> API documentation here</a>, and links to my initial model sketches <a href="https://sketchboard.me/NA4zrPCooVYF#/" target="_blank">here</a> and <a href="https://sketchboard.me/PA4zAKAcfxEl#/" target="_blank">here</a>.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
