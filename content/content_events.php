<?php include "../config.php"; ?>
 <html>
 <head>

 <link rel='stylesheet' href='../styles/styles.css' type='text/css' />
  
 <link rel="exhibit/data"
       type="application/jsonp"
       href="<?php echo $config['data_source']['events']; ?>"
       ex:converter="googleSpreadsheets" />

    <script type="text/javascript" src="http://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js"></script>
<script src="http://static.simile.mit.edu/exhibit/extensions-2.0/time/time-extension.js"></script>

</head> 
<body>


<table id="frame">
   <tr>
      <td id="sidebar">
         <p>
         <div ex:role="facet" ex:expression=".category" ex:facetLabel="Category"></div>
         <div ex:role="facet" ex:expression=".organizer" ex:facetLabel="Organizer"></div>
      </td>
      <td id="content">
         <div id="exhibit-control-panel">
         <div id="exhibit-view-panel">
             This page describes the various editorial events ORM is planning in this space.  Note that this is for calendaring purposes only!
             <div ex:role="view"
                ex:viewClass="Timeline"
                ex:label=".description"
                ex:start=".start_date"
                ex:end=".end_date"
                ex:colorCoder:".category"
             ></div>
            <p> This is the same data, but in tabluar format
            <div ex:role="exhibit-view"
                ex:viewClass="Exhibit.TabularView"
                ex:label="Table"
                ex:columns=".label, .keyTag, .category, .description, .start_date, .end_date"
                ex:columnLabels= "Event, Key Tag, Category, Description, Start Date, End Date"
                ex:sortColumns= 1
                ex:sortAscending="true"
                >
            </div>

         </div>
         </div>    
      </td>

   </tr>
</table>
</body> 
