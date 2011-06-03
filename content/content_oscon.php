<?php include "../config.php"; ?>

 <html>
 <head>

 <link rel='stylesheet' href='../styles/styles.css' type='text/css' />

  
 <link id="data_source"
       rel="exhibit/data"
       type="application/jsonp"
       href="<? echo $config['data_source']['oscon']; ?>"
       ex:converter="googleSpreadsheets" />

 <script type="text/javascript" src="http://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js"></script>

</head> 
<body >

<table id="frame">
   <tr>
      <td id="sidebar" width="25%">
         <p>
         <div ex:role="facet" ex:expression=".track" ex:facetLabel="Track"></div>
         <div ex:role="facet" ex:expression=".sub_track" ex:facetLabel="Sub Track"></div>
         <div ex:role="facet" ex:expression=".day" ex:facetLabel="Day"></div>
         <div ex:role="facet" ex:expression=".length" ex:facetLabel="Length"></div>
      </td>
      <td id="content">
         <div id="exhibit-control-panel">
         <div id="exhibit-view-panel">
            <b>Search:</b> <div style""width: 90%" ex:role="facet" ex:facetClass="TextSearch"></div>
            <div class="item" ex:role="exhibit-lens">
               <table>
                     <tr>
                     <td width="1">
                        <img style="padding: 5px" ex:src-content=".imageURL" width="80" /></td>
                     </td>
                     <td>
                        <div><span style="font-size:120%" ex:content=".label"></span></div>
                        <div style="font-size:75%">
                        <div><span><b>Presenters</b>:<span ex:content=".presenter"></span></div>
                        <div><span><b>Tags</b>:<span ex:content=".tags"></span></div>
                        </div>
                        <p>
                        <div><span ex:content=".description"></span></div>
                    </td>
                    </tr>
                </table>
            </div>
            <div ex:role="exhibit-view"
               ex:viewClass="Exhibit.TileView"
               ex:label="Details"
            </div>
         </div>
         </div>    
      </td>

   </tr>
</table>
</body> 
