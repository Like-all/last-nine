<!DOCTYPE html>
<html>
    <head>
        <title>Last Nine — a Last.fm personal chart picture generator</title>
        <meta charset="utf-8" />
        <meta name="description" content="A tool that generates a patchwork, an image, based on the covers of your Last.fm top albums. It's simple, free, and it works." />
        <meta name="keywords" content="lastfm top albums generator, last.fm top albums generator, lastfm top albums, last.fm top albums, lastfm, last.fm, top albums" />
        <link href="main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Last Nine</h1>
        <h3>A Last.fm personal chart picture generator</h3>
        <div id="content">
            <form action="patchwork.php" method="GET">
                <p>
                    <label for="user">Username</label>
                    <input type="text" name="user" id="user" value="like-all" autofocus />
                </p>
                <p>
                    <label for="period">Period</label>
                    <select name="period" id="period">
                        <option value="12month">One year</option>
                        <option value="6month">6 months</option>
                        <option value="3month">3 months</option>
                        <option value="7day">7 days</option>
                        <option value="overall">Overall</option>
                    </select>
                </p>
                <p>
                    <input type="submit" id="submit" value="Generate!" />
                </p>
            </form>
        </div>
        <footer></footer>
    </body>
</html>
