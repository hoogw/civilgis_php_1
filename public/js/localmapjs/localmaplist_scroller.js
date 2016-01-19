

 $(document).ready(function () {

       var base_url = document.getElementById('base_url').value;
       var _area = document.getElementById('areaID').value;
       var _url = base_url+ 'api/maplistcontent/' + $("#areaID").val() + '/';
    
     //alert(_url);
       
       /* test ajax result before feed into datatable
        
                        $.ajax({
                                    "url": _url,
                                    "success": function(json) {
                                       
                                        alert(json);
                                        },
                                    "dataType": "json"
                                });// ajax
       
        test end */
       
       
       
    
    
                            //  datatable
                            $('#tabledata').DataTable({
                                           
                                                            "ajax":{
                                                                    url :_url, // json datasource
                                                                    type: "post",  // method  , by default get
                                                                    error: function(){  // error handling
                                                                            $(".tabledata-error").html("");
                                                                            $("#tabledata").append('<tbody class="tabledata-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                                                                            $("#tabledata_processing").css("display","none");

                                                                    },// error
                                                                    // by default it is "data:" here must define dataSrc as empty since I use plain array of array
                                                                    "dataSrc": ""
                                                                },  // ajax
                                                                
                                                              
                                                                
                                                               
                                                                
                                                                
                                                                
                                                                
                                                                // ------------ scroller section --------     
                                                               // dom: "frtiS",
                                                                scrollY: 300,
                                                                //scrollX: true,
                                                                deferRender: true,
                                                                //scrollCollapse: true, //only use it on client side, Do not use it on server side, it cause not draw, not send request to server until 25 record after 
                                                                scroller: true,
                                                                //stateSave: true,
                                                                //fixedColumns: true,
                                                                /*
                                                                initComplete: function () {
                                                                                                var api = this.api();
                                                                                                api.scroller().scrollToRow( 1000 );
                                                                                            },
                                                                 */
                                                                /*
                                                                scroller: {
                                                                    loadingIndicator: true
                                                                }
                                                                */
                                                          // ------------ scroller section end--------  
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                "columnDefs": [ {
                                                                                    "targets": 1,
                                                                                    "data": 1,
                                                                                    "render": function ( data, type, full, meta ) {
                                                                                                   var full_name = data;
                                                                                                        full_name = full_name.toLowerCase();
                                                                                                    var _remove_area = _area+"_";
                                                                                                    var trunk_name =   full_name.replace(_remove_area,"");
                                                                                        
                                                                                      return '<a href="'+ base_url+'map/mappaged/'+ _area + "/" +trunk_name+'">' + data + '</a>';
                                                                                    }
                                                                                  } ]
                                                                              
                                                         /*
                                                          * 
                                                          "columnDefs": [
                                                                        {
                                                                            // The `data` parameter refers to the data for the cell (defined by the
                                                                            // `data` option, which defaults to the column being worked with, in
                                                                            // this case `data: 0`.
                                                                            "render": function ( data, type, row ) {
                                                                                return data +' ('+ row[3]+')';
                                                                            },
                                                                            "targets": 0
                                                                        },
                                                                        { "visible": false,  "targets": [ 3 ] }
                                                          */                     
                                                                
                                                               
                                                             
                                                        
                            }); // datatable
                   
                   
                   
                // ajax click row event   
               var table = $('#tabledata').DataTable();
               $('#tabledata tbody').on('click', 'tr', function () {
                                                                        var row_data = table.row( this ).data();
                                                                         //alert(  row_data[0]  );
                                                                         var full_name = row_data[1];
                                                                             full_name = full_name.toLowerCase();
                                                                         var _remove = _area+"_";
                                                                         var trunk_name =   full_name.replace(_remove,"");
                   
                                                                        var _url_new_tab = base_url+ "map/mappaged/"+ _area + "/"+ trunk_name + "/";
                                                                         var win = window.open(_url_new_tab, '_self');
                                                                        win.focus();
                                                                         
                                                                     } );    
                   
                 
                
                   
             

    }); // document ready function


