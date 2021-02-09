
<!DOCTYPE html>
<html lang="th">

<head class="crypt-dark">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EXCAHNGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/ui.css">
</head>

<body class="crypt-dark">

    <div class="container-fluid">
        <div class="row sm-gutters">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-2">
                <div class="crypt-market-status mt-4">
                    <div>
                        <ul class="nav nav-tabs" id="crypt-tab">
                            <li role="presentation"><a href="#usd" class="active" data-toggle="tab">usd</a></li>
                        </ul>
                        <div class="tab-content crypt-tab-content">
                            <div role="tabpanel" class="tab-pane active" id="usd">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Currency</th>
                                            <th scope="col">Ask</th>
                                            <th scope="col">Bid</th>
                                        </tr>
                                    </thead>
                                    <tbody class="crypt-table-hover">
                                        <tr>
                                            <td class="align-middle"><img class="crypt-star pr-1" alt="star" src="images/star.svg" width="15"> GBP/USD</td>
                                            <td class="crypt-down align-middle"><span class="pr-2" data-toggle="tooltip" data-placement="right" id="gsb_usd_ask">0.0</span></td>
                                            <td> <span class="d-block" id="gsb_usd_bid">0.0</span>  </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-8">
                <div class="tradingview-widget-container mb-3">
                    <div id="crypt-candle-chart"></div>
                </div>
                <div id="depthchart" class="depthchart h-40 crypt-dark-segment"></div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 col-xxl-2">
                <div class="crypt-market-status mt-4">
                    <div>
                        <ul class="nav nav-tabs">
                            <li role="presentation"><a href="#history" class="active" data-toggle="tab">history</a></li>
                            <li role="presentation"><a href="#market-trading" data-toggle="tab">market trading</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="history">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.000056</td>
                                            <td>5.3424984</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000564</td>
                                            <td>6.6768876</td>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000564</td>
                                            <td>6.6768876</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="market-trading">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000564</td>
                                            <td>6.6768876</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.000056</td>
                                            <td>5.3424984</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000564</td>
                                            <td>6.6768876</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.000056</td>
                                            <td>5.3424984</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000564</td>
                                            <td>6.6768876</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.000056</td>
                                            <td>5.3424984</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row sm-gutters">
            <div class="col-xl-5">
                <div class="crypt-boxed-area">
                    <h6 class="crypt-bg-head"><b class="crypt-up">BUY</b> / <b class="crypt-down">SELL</b></h6>
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="crypt-buy-sell-form">
                                <p>Buy <span class="crypt-up"></span> <span class="fright">Available: <b class="crypt-up">20 </b></span></p>
                                <div class="crypt-buy">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Price</span> </div>
                                        <input type="text" class="form-control" placeholder="0.02323476" readonly>
                                        <div class="input-group-append"> <span class="input-group-text"></span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Amount</span> </div>
                                        <input type="number" class="form-control">
                                        <div class="input-group-append"> <span class="input-group-text"></span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Total</span> </div>
                                        <input type="text" class="form-control" readonly>
                                        <div class="input-group-append"> <span class="input-group-text"></span> </div>
                                    </div>
                                    <div>
                                        <p>Fee: <span class="fright">100%x0.2=0.02</span></p>
                                    </div>
                                    <div class="text-center mt-3 mb-3 crypt-up">
                                        <p>You will approximately pay</p>
                                        <h4>0.09834 </h4></div>
                                    <div class="menu-green"><a href="" class="crypt-button-green-full">Buy</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="crypt-buy-sell-form">
                                <p>Sell <span class="crypt-down"></span> <span class="fright">Available: <b class="crypt-down">20 </b></span></p>
                                <div class="crypt-sell">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Price</span> </div>
                                        <input type="text" class="form-control" placeholder="0.02323476" readonly>
                                        <div class="input-group-append"> <span class="input-group-text"></span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Amount</span> </div>
                                        <input type="number" class="form-control">
                                        <div class="input-group-append"> <span class="input-group-text"></span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Total</span> </div>
                                        <input type="text" class="form-control" readonly>
                                        <div class="input-group-append"> <span class="input-group-text"></span> </div>
                                    </div>
                                    <div>
                                        <p>Fee: <span class="fright">100%x0.2=0.02</span></p>
                                    </div>
                                    <div class="text-center mt-3 mb-3 crypt-down">
                                        <p>You will approximately pay</p>
                                        <h4>0.09834 </h4></div>
                                    <div><a href="" class="crypt-button-red-full">Sell</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div>
                    <div class="crypt-market-status">
                        <div>
                            <ul class="nav nav-tabs">
                                <li role="presentation"><a href="#active-orders" class="active" data-toggle="tab">Active Orders</a></li>
                                <li role="presentation"><a href="#closed-orders" data-toggle="tab">Closed Orders</a></li>
                                <li role="presentation"><a href="#balance" data-toggle="tab">Balance</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="active-orders">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Time</th>
                                                <th scope="col">Buy/sell</th>
                                                <th scope="col">Price </th>
                                                <th scope="col">Amount BPS</th>
                                                <th scope="col">Dealt BPS</th>
                                                <th scope="col">Operation</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <div class="no-orders text-center"><img src="images/empty.png" alt="no-orders"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="closed-orders">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Time</th>
                                                <th scope="col">Buy/sell</th>
                                                <th scope="col">Price </th>
                                                <th scope="col">Amount BPS</th>
                                                <th scope="col">Dealt BPS</th>
                                                <th scope="col">Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>22:35:59</th>
                                                <td class="crypt-up">Buy</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.0003456</td>
                                                <td>5.3424984</td>
                                            </tr>
                                            <tr>
                                                <th>22:35:59</th>
                                                <td class="crypt-down">Sell</td>
                                                <td class="crypt-down">0.000056</td>
                                                <td class="crypt-down">0.000056</td>
                                                <td class="crypt-down">0.0003456</td>
                                                <td>5.3424984</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="balance">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Currency</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Volume</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>XMR</th>
                                                <td>0.0000234</td>
                                                <td>4.3456600</td>
                                            </tr>
                                            <tr>
                                                <th>BIT</th>
                                                <td>0.0000567</td>
                                                <td>4.3456600</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>

    </footer>
	<script src="https://s3.tradingview.com/tv.js"></script>
    <script src="js/tv.js"></script>
    <script src="js/depthchart.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
