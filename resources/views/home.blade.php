@extends('layouts.app')

@section('content')
<div class="" style="animation-duration: 800ms; opacity: 1;">
    <div class="page-header">
      <h1 class="page-title font-size-26 font-weight-100">Ecommerce Overview</h1>
    </div>
    <div class="container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <!-- First Row -->
        <div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
          <div class="widget widget-shadow">
            <div class="widget-content bg-white padding-20">
              <button type="button" class="btn btn-floating btn-sm btn-warning">
                <i class="icon wb-shopping-cart"></i>
              </button>
              <span class="margin-left-15 font-weight-400">ORDERS</span>
              <div class="content-text text-center margin-bottom-0">
                <i class="text-danger icon wb-triangle-up font-size-20">
                          </i>
                <span class="font-size-40 font-weight-100">399</span>
                <p class="blue-grey-400 font-weight-100 margin-0">+45% From previous month</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
          <div class="widget widget-shadow">
            <div class="widget-content bg-white padding-20">
              <button type="button" class="btn btn-floating btn-sm btn-danger">
                <i class="icon fa-dollar"></i>
              </button>
              <span class="margin-left-15 font-weight-400">INCOM</span>
              <div class="content-text text-center margin-bottom-0">
                <i class="text-success icon wb-triangle-down font-size-20">
                          </i>
                <span class="font-size-40 font-weight-100">$18,628</span>
                <p class="blue-grey-400 font-weight-100 margin-0">+45% From previous month</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
          <div class="widget widget-shadow">
            <div class="widget-content bg-white padding-20">
              <button type="button" class="btn btn-floating btn-sm btn-success">
                <i class="icon wb-eye"></i>
              </button>
              <span class="margin-left-15 font-weight-400">VISITORS</span>
              <div class="content-text text-center margin-bottom-0">
                <i class="text-danger icon wb-triangle-up font-size-20">
                          </i>
                <span class="font-size-40 font-weight-100">23,456</span>
                <p class="blue-grey-400 font-weight-100 margin-0">+25% From previous month</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
          <div class="widget widget-shadow">
            <div class="widget-content bg-white padding-20">
              <button type="button" class="btn btn-floating btn-sm btn-primary">
                <i class="icon wb-user"></i>
              </button>
              <span class="margin-left-15 font-weight-400">CUSTOMERS</span>
              <div class="content-text text-center margin-bottom-0">
                <i class="text-danger icon wb-triangle-up font-size-20">
                          </i>
                <span class="font-size-40 font-weight-100">4,367</span>
                <p class="blue-grey-400 font-weight-100 margin-0">+25% From previous month</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End First Row -->

        <!-- second Row -->
        <div class="col-ms-12 col-xs-12 col-md-12" id="ecommerceChartView">
          <div class="widget widget-shadow">
            <div class="widget-header padding-20">
              <div class="btn-group dropdown chart-menu">
                <button type="button" class="btn btn-outline btn-default dropdown-toggle" data-toggle="dropdown">
                  PRODUCTS SALES
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu animate" role="menu">
                  <li role="presentation">
                    <a href="#" role="menuitem">Sales</a>
                  </li>
                  <li role="presentation">
                    <a href="#" role="menuitem">Total sales</a>
                  </li>
                  <li role="presentation">
                    <a href="#" role="menuitem">profit</a>
                  </li>
                </ul>
              </div>
              <ul class="nav nav-pills nav-pills-rounded chart-action" data-plugin="nav-tabs">
                <li class="active"><a data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                <li><a data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                <li><a data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
              </ul>
            </div>
            <div class="widget-content tab-content bg-white padding-20">
              <div class="ct-chart tab-pane active" id="scoreLineToDay"><div class="chartist-tooltip" style="display: none; top: 89px; left: 426px;"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300" class="ct-chart-line" style="width: 100%; height: 300;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="1084" class="ct-grid ct-vertical"></line><line y1="202.5" y2="202.5" x1="50" x2="1084" class="ct-grid ct-vertical"></line><line y1="140" y2="140" x1="50" x2="1084" class="ct-grid ct-vertical"></line><line y1="77.5" y2="77.5" x1="50" x2="1084" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="1084" class="ct-grid ct-vertical"></line></g><g><g series-name="series-1" class="ct-series ct-series-a"><path d="M 50 265 L 50 190 C 136.167 190 136.167 124.375 222.333 124.375 C 308.5 124.375 308.5 108.75 394.667 108.75 C 480.833 108.75 480.833 74.375 567 74.375 C 653.167 74.375 653.167 24.375 739.333 24.375 C 825.5 24.375 825.5 108.75 911.667 108.75 C 997.833 108.75 997.833 211.875 1084 211.875 L 1084 265 Z" class="ct-area" values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"></path><path d="M 50 190 C 136.167 190 136.167 124.375 222.333 124.375 C 308.5 124.375 308.5 108.75 394.667 108.75 C 480.833 108.75 480.833 74.375 567 74.375 C 653.167 74.375 653.167 24.375 739.333 24.375 C 825.5 24.375 825.5 108.75 911.667 108.75 C 997.833 108.75 997.833 211.875 1084 211.875" class="ct-line" filter="url(#shadowscoreLineToDay)"></path><line x1="50" y1="190" x2="50.01" y2="190" class="ct-point" value="2400"></line><line x1="50" y1="190" x2="50.01" y2="190" class="ct-point-content"></line><line x1="222.33333333333334" y1="124.375" x2="222.34333333333333" y2="124.375" class="ct-point" value="4500"></line><line x1="222.33333333333334" y1="124.375" x2="222.34333333333333" y2="124.375" class="ct-point-content"></line><line x1="394.6666666666667" y1="108.75" x2="394.6766666666667" y2="108.75" class="ct-point" value="5000"></line><line x1="394.6666666666667" y1="108.75" x2="394.6766666666667" y2="108.75" class="ct-point-content"></line><line x1="567" y1="74.375" x2="567.01" y2="74.375" class="ct-point" value="6100"></line><line x1="567" y1="74.375" x2="567.01" y2="74.375" class="ct-point-content"></line><line x1="739.3333333333334" y1="24.375" x2="739.3433333333334" y2="24.375" class="ct-point" value="7700"></line><line x1="739.3333333333334" y1="24.375" x2="739.3433333333334" y2="24.375" class="ct-point-content"></line><line x1="911.6666666666667" y1="108.75" x2="911.6766666666667" y2="108.75" class="ct-point" value="5000"></line><line x1="911.6666666666667" y1="108.75" x2="911.6766666666667" y2="108.75" class="ct-point-content"></line><line x1="1084" y1="211.875" x2="1084.01" y2="211.875" class="ct-point" value="1700"></line><line x1="1084" y1="211.875" x2="1084.01" y2="211.875" class="ct-point-content"></line></g><g series-name="series-2" class="ct-series ct-series-b"><path d="M 50 265 L 50 224.375 C 136.167 224.375 136.167 136.875 222.333 136.875 C 308.5 136.875 308.5 15 394.667 15 C 480.833 15 480.833 140 567 140 C 653.167 140 653.167 58.75 739.333 58.75 C 825.5 58.75 825.5 90 911.667 90 C 997.833 90 997.833 146.25 1084 146.25 L 1084 265 Z" class="ct-area" values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"></path><path d="M 50 224.375 C 136.167 224.375 136.167 136.875 222.333 136.875 C 308.5 136.875 308.5 15 394.667 15 C 480.833 15 480.833 140 567 140 C 653.167 140 653.167 58.75 739.333 58.75 C 825.5 58.75 825.5 90 911.667 90 C 997.833 90 997.833 146.25 1084 146.25" class="ct-line" filter="url(#shadowscoreLineToDay)"></path><line x1="50" y1="224.375" x2="50.01" y2="224.375" class="ct-point" value="1300"></line><line x1="50" y1="224.375" x2="50.01" y2="224.375" class="ct-point-content"></line><line x1="222.33333333333334" y1="136.875" x2="222.34333333333333" y2="136.875" class="ct-point" value="4100"></line><line x1="222.33333333333334" y1="136.875" x2="222.34333333333333" y2="136.875" class="ct-point-content"></line><line x1="394.6666666666667" y1="15" x2="394.6766666666667" y2="15" class="ct-point" value="8000"></line><line x1="394.6666666666667" y1="15" x2="394.6766666666667" y2="15" class="ct-point-content"></line><line x1="567" y1="140" x2="567.01" y2="140" class="ct-point" value="4000"></line><line x1="567" y1="140" x2="567.01" y2="140" class="ct-point-content"></line><line x1="739.3333333333334" y1="58.75" x2="739.3433333333334" y2="58.75" class="ct-point" value="6600"></line><line x1="739.3333333333334" y1="58.75" x2="739.3433333333334" y2="58.75" class="ct-point-content"></line><line x1="911.6666666666667" y1="90" x2="911.6766666666667" y2="90" class="ct-point" value="5600"></line><line x1="911.6666666666667" y1="90" x2="911.6766666666667" y2="90" class="ct-point-content"></line><line x1="1084" y1="146.25" x2="1084.01" y2="146.25" class="ct-point" value="3800"></line><line x1="1084" y1="146.25" x2="1084.01" y2="146.25" class="ct-point-content"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="172.33333333333334" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 172px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">1st</span></foreignObject><foreignObject style="overflow: visible;" x="222.33333333333334" y="270" width="172.33333333333334" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 172px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">2nd</span></foreignObject><foreignObject style="overflow: visible;" x="394.6666666666667" y="270" width="172.33333333333331" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 172px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">3rd</span></foreignObject><foreignObject style="overflow: visible;" x="567" y="270" width="172.33333333333337" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 172px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">4th</span></foreignObject><foreignObject style="overflow: visible;" x="739.3333333333334" y="270" width="172.33333333333337" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 172px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">5th</span></foreignObject><foreignObject style="overflow: visible;" x="911.6666666666667" y="270" width="172.33333333333326" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 172px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">6th</span></foreignObject><foreignObject style="overflow: visible;" x="1084" y="270" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">7th</span></foreignObject><foreignObject style="overflow: visible;" y="202.5" x="10" height="62.5" width="30"><span class="ct-label ct-vertical ct-start" style="height: 63px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0K</span></foreignObject><foreignObject style="overflow: visible;" y="140" x="10" height="62.5" width="30"><span class="ct-label ct-vertical ct-start" style="height: 63px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">2K</span></foreignObject><foreignObject style="overflow: visible;" y="77.5" x="10" height="62.5" width="30"><span class="ct-label ct-vertical ct-start" style="height: 63px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">4K</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="62.5" width="30"><span class="ct-label ct-vertical ct-start" style="height: 63px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">6K</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">8K</span></foreignObject></g><defs><filter x="0" y="-10%" id="shadowscoreLineToDay"><feGaussianBlur in="SourceAlpha" stdDeviation="8" result="offsetBlur"></feGaussianBlur><feOffset dx="0" dy="10"></feOffset><feBlend in="SourceGraphic" mode="multiply"></feBlend></filter></defs></svg></div>
              <div class="ct-chart tab-pane" id="scoreLineToWeek"></div>
              <div class="ct-chart tab-pane" id="scoreLineToMonth"></div>
            </div>
          </div>
        </div>
        <!-- End Second Row -->

        <!-- Third Row -->
        <!-- Third Left -->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="ecommerceRecentOrder">
          <div class="widget widget-shadow table-row">
            <div class="widget-header padding-20">
              <div class="btn-group dropdown table-menu">
                <button type="button" class="btn btn-outline btn-default dropdown-toggle" data-toggle="dropdown">
                  RECENT ORDER
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu animate" role="menu">
                  <li role="presentation">
                    <a href="#" role="menuitem">Sales</a>
                  </li>
                  <li role="presentation">
                    <a href="#" role="menuitem">Total sales</a>
                  </li>
                  <li role="presentation">
                    <a href="#" role="menuitem">profit</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="widget-content bg-white table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Purchased On</th>
                    <th>Status</th>
                    <th>Tracking No#</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="../assets/examples/images/products/imac.png" alt="iMac">
                    </td>
                    <td>iMac</td>
                    <td>Russell</td>
                    <td>22/08/2015</td>
                    <td>
                      <span class="label label-success font-weight-100">Paid</span>
                    </td>
                    <td>#98BC85SD84</td>

                  </tr>
                  <tr>
                    <td>
                      <img src="../assets/examples/images/products/iphone.png" alt="iPhone">
                    </td>
                    <td>iPhone</td>
                    <td>Carol</td>
                    <td>15/07/2015</td>
                    <td>
                      <span class="label label-warning font-weight-100">Pending</span>
                    </td>
                    <td>#98SA3C9SC</td>

                  </tr>
                  <tr>
                    <td>
                      <img src="../assets/examples/images/products/applewatch.png" alt="apple_watch">
                    </td>
                    <td>apple Watch</td>
                    <td>Austin Pena</td>
                    <td>10/07/2015</td>
                    <td>
                      <span class="label label-success font-weight-100">Paid</span>
                    </td>
                    <td>#98BC85SD84</td>

                  </tr>
                  <tr>
                    <td>
                      <img src="../assets/examples/images/products/macmouse.png" alt="mac_mouse">
                    </td>
                    <td>mac Mouse</td>
                    <td>Randy</td>
                    <td>22/04/2015</td>
                    <td>
                      <span class="label label-default font-weight-100">Failed</span>
                    </td>
                    <td>#98SA3C9SC</td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- End Third Left -->

        <!-- Third Right -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ecommerceRevenue">
          <div class="widget widget-shadow text-center padding-top-10">
            <h3 class="widget-header blue-grey-700 font-size-14">REVENUE</h3>
            <div class="widget-content bg-white">
              <div class="ct-chart barChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="220" class="ct-chart-bar" style="width: 100%; height: 220;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><line x1="65.8" x2="65.8" y1="185" y2="51.125" class="ct-bar" value="630"></line><line x1="65.8" x2="65.8" y1="51.125" y2="0" class="ct-bar-fill"></line><line x1="121.4" x2="121.4" y1="185" y2="36.25" class="ct-bar" value="700"></line><line x1="121.4" x2="121.4" y1="36.25" y2="0" class="ct-bar-fill"></line><line x1="177" x2="177" y1="185" y2="78.75" class="ct-bar" value="500"></line><line x1="177" x2="177" y1="78.75" y2="0" class="ct-bar-fill"></line><line x1="232.60000000000002" x2="232.60000000000002" y1="185" y2="100" class="ct-bar" value="400"></line><line x1="232.60000000000002" x2="232.60000000000002" y1="100" y2="0" class="ct-bar-fill"></line><line x1="288.2" x2="288.2" y1="185" y2="19.25" class="ct-bar" value="780"></line><line x1="288.2" x2="288.2" y1="19.25" y2="0" class="ct-bar-fill"></line></g><g class="ct-series ct-series-b"><line x1="89.8" x2="89.8" y1="185" y2="100" class="ct-bar" value="400"></line><line x1="89.8" x2="89.8" y1="100" y2="0" class="ct-bar-fill"></line><line x1="145.4" x2="145.4" y1="185" y2="15" class="ct-bar" value="800"></line><line x1="145.4" x2="145.4" y1="15" y2="0" class="ct-bar-fill"></line><line x1="201" x2="201" y1="185" y2="36.25" class="ct-bar" value="700"></line><line x1="201" x2="201" y1="36.25" y2="0" class="ct-bar-fill"></line><line x1="256.6" x2="256.6" y1="185" y2="78.75" class="ct-bar" value="500"></line><line x1="256.6" x2="256.6" y1="78.75" y2="0" class="ct-bar-fill"></line><line x1="312.2" x2="312.2" y1="185" y2="36.25" class="ct-bar" value="700"></line><line x1="312.2" x2="312.2" y1="36.25" y2="0" class="ct-bar-fill"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="190" width="55.6" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 56px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">JAN</span></foreignObject><foreignObject style="overflow: visible;" x="105.6" y="190" width="55.6" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 56px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">FEB</span></foreignObject><foreignObject style="overflow: visible;" x="161.2" y="190" width="55.60000000000001" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 56px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">MAR</span></foreignObject><foreignObject style="overflow: visible;" x="216.8" y="190" width="55.599999999999994" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 56px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">APR</span></foreignObject><foreignObject style="overflow: visible;" x="272.4" y="190" width="55.599999999999994" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 56px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">MAY</span></foreignObject><foreignObject style="overflow: visible;" y="142.5" x="10" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" style="height: 43px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject><foreignObject style="overflow: visible;" y="100" x="10" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" style="height: 43px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">200</span></foreignObject><foreignObject style="overflow: visible;" y="57.5" x="10" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" style="height: 43px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">400</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" style="height: 43px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">600</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">800</span></foreignObject></g></svg></div>
              <div class="pie-view">
                <div class="col-lg-6 col-sm-6 col-xs-6 pie-left text-center">
                  <h5 class="blue-grey-500 font-size-14 font-weight-100">GROS REVENUE</h5>
                  <p class="font-size-20 blue-grey-700">
                    9,362,74
                  </p>
                  <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100" data-valuemin="0" data-barcolor="#a58add" data-size="100" data-barsize="4" data-goal="60" aria-valuenow="60" role="progressbar">
                    <span class="pie-progress-number">60%</span>
                  <div class="pie-progress-svg"><svg version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 100 100"><ellipse rx="48" ry="48" cx="50" cy="50" stroke="#f2f2f2" fill="none" stroke-width="4"></ellipse><path fill="none" stroke-width="4" stroke="#a58add" d="M50,2 A48,48 0 1 1 21.78630788996131,88.83281572999749" style="stroke-dasharray: 180.963, 180.963; stroke-dashoffset: 0;"></path></svg></div></div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 pie-right text-center">
                  <h5 class="blue-grey-500 font-size-14 font-weight-100">NET REVENUE</h5>
                  <p class="font-size-20 blue-grey-700">
                    6,734,58
                  </p>
                  <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100" data-valuemin="0" data-barcolor="#77d6e1" data-size="100" data-barsize="4" data-goal="78" aria-valuenow="78" role="progressbar">
                    <span class="pie-progress-number">78%</span>
                  <div class="pie-progress-svg"><svg version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 100 100"><ellipse rx="48" ry="48" cx="50" cy="50" stroke="#f2f2f2" fill="none" stroke-width="4"></ellipse><path fill="none" stroke-width="4" stroke="#77d6e1" d="M50,2 A48,48 0 1 1 2.850211965022943,41.00569689988524" style="stroke-dasharray: 235.25, 235.25; stroke-dashoffset: 0;"></path></svg></div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Third Right -->
        <!-- End Third Row -->
      </div>
    </div>
  </div>
@endsection
