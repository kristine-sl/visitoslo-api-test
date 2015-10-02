<!DOCTYPE html>
<html>
    <head>
        <title>VisitOslo</title>
        <link rel='stylesheet' href='css/main.css'>
    </head>
    <body>
        <div class = 'SiteContainer'>
            <h1>Visit<strong>Oslo</strong></h1>
            <div class='BoxContainer'>

                @foreach( $entities as $entity )
                    <div class='BoxContainer-box'>
                        <h2>{{ $entity->name }}</h2>
                    </div>
                @endforeach

                @foreach( $entities as $entity )
                    <div class='BoxContainer-box'>
                        <h2>{{ $entity->name }}</h2>
                    </div>
                @endforeach

            </div>
        </div>
    </body>
</html>
