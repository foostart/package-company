<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="packages/foostart/package-company/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <link href="packages/foostart/package-company/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <link href="packages/foostart/package-company/css/front-company-styles.css" rel="stylesheet" type="text/css"/>
      <title>List of companies</title>
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
                              <p><input name="key" class="input-block-level" type="text" placeholder="Search"/></p>
                              <p><input class="btn-style" type="submit" name="searchButton" value="Search"/></p>
                           </form>
                        </div>
                        <!--/END WIDGET SEARCH-->
                        <!--WIDGET POST-->
                        <div class="widget widget-popular-post">
                           <h2>All copmanies</h2>
                           <ul>
                              @foreach ($items as $item)
                              <li>
                                 <a href="{{asset('company/'.$item->company_slug)}}">
                                    <h4>{{$item->company_name}}</h4>
                                 </a>
                                 <div class="thumb">
                                    <a href="{{asset('company/'.$item->company_slug)}}"><img src="{{$item->company_image}}" style="width: 100px;height: 100px;" alt=""/></a>
                                 </div>
                                 <div class="text">
                                    <p class="date">{{$item->created_at->format('d/m/Y')}}<span><a href="#">Admin</a></span></p>
                                    <p>{{$item->company_overview}}</p>
                                 </div>
                              </li>
                              @endforeach
                           </ul>
                        </div>
                        <!--/END WIDGET POST-->
                     </div>
                     <div class="clearfix"></div>
                     <div class="post-pagination">
                        {{$items->links("pagination::bootstrap-4")}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>