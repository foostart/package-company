<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="{{asset('packages/foostart/package-company/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{asset('packages/foostart/package-company/css/bootstrap.min.css')}}" rel="stylesheet type="text/css"/>
      <link href="{{asset('packages/foostart/package-company/css/front-company-styles.css')}}" rel="stylesheet" type="text/css"/>
      <title>{{$item->company_name}}</title>
    </head>
   <body>
      <div class="bg-color" style="background: #f7f7f7">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="type-2017">
                     <div class="sidebar">
                        <!--WIDGET SEARCH-->
                        <div class="widget widget-search-course">
                        <form action="{{asset('/company/search/')}}" method="GET">
                           {{ csrf_token() }}
                              <i class="fa fa-search"></i>
                              <h2>Search Course</h2>
                              <div class="styled-select">
                                 <select class="input-block-level">
                                    <option>Here is the first option</option>
                                    <option>The second option</option>
                                 </select>
                              </div>
                              <p><input name="key"  class="input-block-level" type="text" placeholder="Search"/></p>
                              <p><input class="btn-style" type="submit" name="searchButton" value="Search"/></p>
                           </form>
                        </div>
                        <!--/END WIDGET SEARCH-->
                        <!--WIDGET POST-->
                        <div class="widget widget-popular-post">
                            <h3>{{$item->company_name}}</h3>
                            <div class="info">Created at: <strong>{{$item->created_at->format('d/m/Y')}}</strong></div>
                            <div class="info">Last updated: <strong>{{$item->updated_at->format('d/m/Y')}}</strong></div>
                            <div class="info">Created by: <strong>{{$item->user_full_name}}</strong></div>
                            <img src="{{$item->company_image}}" alt="image of {{$item->company_name}}" style="width:90%">
                            <h4>Overview</h4>
                            <p class="post-overview">
                                {{$item->company_overview}}
                            </p>
                            <h4>Description</h4>
                            {!!$item->company_description!!}
                        </div>
                        <!--/END WIDGET POST-->
                        <!--WIDGET FLICKS-->
                        <div class="widget widget-flickr">
                           <h2>Flickr Photos</h2>
                           <div class="row">
                              <!--LIST-->
                              <!--ITEM-->
                              <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                                 <a href="#">
                                 <img src="http://block.local/1-sources/2017/images/flickr.jpg" alt=""/>
                                 </a>
                              </div>
                              <!--/ITEM-->
                              <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                                 <a href="#">
                                 <img src="http://block.local/1-sources/2017/images/flickr2.jpg" alt=""/>
                                 </a>
                              </div>
                              <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                                 <a href="#">
                                 <img src="http://block.local/1-sources/2017/images/flickr3.jpg" alt=""/>
                                 </a>
                              </div>
                              <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                                 <a href="#">
                                 <img src="http://block.local/1-sources/2017/images/flickr.jpg" alt=""/>
                                 </a>
                              </div>
                              <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                                 <a href="#">
                                 <img src="http://block.local/1-sources/2017/images/flickr2.jpg" alt=""/>
                                 </a>
                              </div>
                              <div class='col-md-4 col-sm-4 col-xs-4 item-2017'>
                                 <a href="#">
                                 <img src="http://block.local/1-sources/2017/images/flickr3.jpg" alt=""/>
                                 </a>
                              </div>
                              <!--/LIST-->
                           </div>
                        </div>
                        <!--/END WIDGET FLICKS-->
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>