<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Citypedia</title>
    <!--css-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/datawarehouse.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="index.html">Citypedia</a>
    </nav>
    <div id="e1">
      <br><H3>Climate Analysis</H3>
      <p>It will calculate average temperature, highest temperature, lowest temperature, 
        highest precipitation and the number of different kinds of weather status for every month, every city, every state.
        Users can control the granularity of time and the geographic position to check these minimum or maximum values. 
        By this warehouse, people can know the status of some area with history climate data. Meanwhile, people can also know 
        the climate change in some area, and they can make a better dicision on travel or business.
      </p>
      <H5>Transformed Table: State, City, Climate</H5>
    </div>

    <div id="e2">
      <br><H3>Economics and Population</H3>
      <p>It will help users know the complete GDP and population status of some are in recent 10 years
         It will show these statistics in chart and users can see the relationships between economics and population
         and changes in areas. Meanwhile, It can find the extreme point.
      </p>
      <H5>Transformed Table: State, City, Economics, Population</H5>
    </div>

    <div id="e3">
      <br><H3>Information Statistics</H3>
      <p>It will show a complete statistics of areas (State or City). It will get the total number of all kinds of buildings
       and other information of a city or a state, then show them in a table. This will help users compare
        different areas that they may be interested in by one table. It is a higher level statistics than other functions of 
        citypedia. It is a total analysis of all the data in citypedia.
      </p>
      <H5>Transformed Table: City, State, Airport, Viewpoint, Sportteam, College, Museum</H5>
    </div>
    <br>
    <br>
    <!--js-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>

  <footer>
    Citypedia by Linxuan Xu
  </footer>
</html>