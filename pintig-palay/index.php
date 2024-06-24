<?php
include '../components/header.php';
?>
<div class="row">
    <div class="col-md-2 p-0">
        <?php
        include '../components/sidebar.php';
        ?>
    </div>
    <div class="col-md-10">
        <?php
        include '../components/navbar.php';
        ?>
        <section class="mb-5" style="height: 100%;">
            <div class="container-fluid">
                <hr>
                <div class="row">
                    <div class="col-md-6 col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../pages/dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pintig Palay</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-6">
                        <h1 class="text-end">Pintig Palay</h1>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="container">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="report-tab" data-bs-toggle="tab" data-bs-target="#report" type="button" role="tab" aria-controls="report" aria-selected="false">Report</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="inventory-tab" data-bs-toggle="tab" data-bs-target="#inventory" type="button" role="tab" aria-controls="inventory" aria-selected="false">Inventory</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="procurement-tab" data-bs-toggle="tab" data-bs-target="#procurement" type="button" role="tab" aria-controls="procurement" aria-selected="false">Procurement</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="stock-ledger-tab" data-bs-toggle="tab" data-bs-target="#stock-ledger" type="button" role="tab" aria-controls="stock-ledger" aria-selected="false">Stock Ledger</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="client-tab" data-bs-toggle="tab" data-bs-target="#client" type="button" role="tab" aria-controls="client" aria-selected="false">Client</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <!-- Dashboard content goes here -->
                                <div class="container mt-5">
                                    <div class="wrapper">
                                        <div class="row mb-5">
                                            <div class="col-md-3 col-6 mb-3">
                                                <div class="card bg-danger rounded-2" style="max-width: 20rem;">
                                                    <div class="card-body text-white p-0">
                                                        <div class="row p-3">
                                                            <i class="fa-regular fa-file fa-xl text-white text-end" style="font-size: 100px; opacity: 0.5; transform: rotate(20deg); margin-left:30px;"></i>
                                                            <div class="col-md-9 col">
                                                                <h4>Active</h4>
                                                            </div>
                                                            <div class="col-md-3 col">
                                                                <h3>4</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="card bg-primary rounded-2" style="max-width: 20rem;">
                                                    <div class="card-body text-white p-0">
                                                        <div class="row p-3">
                                                            <i class="fa-solid fa-money-bill fa-xl text-white text-end" style="font-size: 100px; opacity: 0.5; transform: rotate(20deg); margin-left:30px;"></i>
                                                            <div class="col-md-7 col">
                                                                <h4>Cash</h4>
                                                            </div>
                                                            <div class="col-md-5 col">
                                                                <h3>4,000</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="card bg-success rounded-2" style="max-width: 20rem;">
                                                    <div class="card-body text-white p-0">
                                                        <div class="row p-3">
                                                            <i class="fa-solid fa-chart-line fa-xl text-white text-end" style="font-size: 100px; opacity: 0.5; transform: rotate(20deg); margin-left:30px;"></i>
                                                            <div class="col-md-9 col">
                                                                <h4>Profit</h4>
                                                            </div>
                                                            <div class="col-md-3 col">
                                                                <h3>4</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6 ">
                                                <div class="card bg-info rounded-2" style="max-width: 20rem;">
                                                    <div class="card-body text-white p-0">
                                                        <div class="row p-3">
                                                            <i class="fa-solid fa-boxes-stacked fa-xl text-white text-end" style="font-size: 100px; opacity: 0.5; transform: rotate(20deg); margin-left:30px;"></i>
                                                            <div class="col-md-9 col">
                                                                <h4>Stocks</h4>
                                                            </div>
                                                            <div class="col-md-3 col">
                                                                <h3>4</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <div id='calendar'></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPintigPalay">
                                                    New Transaction
                                                </button>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                                    Quick Access
                                                </button>
                                            </div>
                                            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                                <div class="card mt-3" style="width: 300px;">
                                                    <div class="card-body">
                                                        <a class="nav-link text-primary" aria-current="page" href="#">Items</a>
                                                        <a class="nav-link text-primary" href="#">Suppliers</a>
                                                        <a class="nav-link text-primary" href="#">Receiving</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modalPintigPalay" tabindex="-1" aria-labelledby="modalPintigPalay" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="addTransactionModalPintigPalay">Add pintig Palay Transaction</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="">
                                                                <div class="mb-3">
                                                                    <div class="form-floating">
                                                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                                            <option selected disabled>Select Client</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>
                                                                        <label for="floatingSelect">Client</label>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="form-floating">
                                                                        <select class="form-select" id="transactionType" aria-label="Transaction Type">
                                                                            <option selected disabled>Select Transaction Type</option>
                                                                            <option value="Cash">Cash</option>
                                                                            <option value="Loan">Loan</option>
                                                                            <option value="Reseller">Reseller</option>
                                                                        </select>
                                                                        <label for="transactionType">Transaction Type</label>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="form-floating">
                                                                        <select class="form-select" id="riceVariant" aria-label="Rice Variant">
                                                                            <option selected disabled>Select Rice Variant</option>
                                                                            <option value="Coco Pandan">Coco Pandan</option>
                                                                            <option value="Brilliant">Brilliant</option>
                                                                            <option value="Buko Pandan">Buko Pandan</option>
                                                                        </select>
                                                                        <label for="riceVariant">Rice Variant</label>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" class="form-control" id="quantity" placeholder="Quantity">
                                                                        <label for="quantity">Quantity</label>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="downPaymentCheckbox">
                                                                        <label class="form-check-label" for="downPaymentCheckbox">
                                                                            Down Payment
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3" id="downPaymentAmount" style="display: none;">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" id="downPaymentAmountInput" placeholder="Down Payment Amount">
                                                                        <label for="downPaymentAmountInput">Down Payment Amount</label>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" id="amount" placeholder="Amount" readonly>
                                                                        <label for="amount">Amount</label>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="button" class="btn btn-primary">Add Transaction</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div style="width: 100%;">
                                                <canvas id="pintigPalayChart"></canvas>
                                            </div>
                                            <!-- <div class="card">
                                        <div class="card-header fw-bolder">Quick Location</div>
                                        <nav class="navbar navbar-expand-lg">
                                            <div class="container">
                                                <div class="navbar-nav flex-column fs-4">
                                                    <a class="nav-link active text-primary" aria-current="page" href="#">Reports</a>
                                                    <a class="nav-link text-primary" href="../pages/pintig-palay.php"></i></a>
                                                    <a class="nav-link text-primary" href="#">Lending</a>
                                                    <div class="wrapper">
                                                        <a class="nav-link disabled text-white" aria-disabled="true"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sign Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Dashboard content goes here -->
                                <!-- Dashboard content goes here -->
                                <!-- Dashboard content goes here -->
                            </div>
                            <div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="report-tab">
                                <!-- Report content goes here -->
                                <div class="container mt-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div style="letter-spacing: 3px;">
                                                <h2>REPORTS</h2>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <form class="d-flex" role="search">
                                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-outline-success" type="submit">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                    <hr>
                                    <table class="table table-responsive text-center table-dark table-hover table-bordered">
                                        <thead>
                                            <th>DATE</th>
                                            <th>TITLE</th>
                                            <th>ACTION</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>May 2024</td>
                                                <td>Monthly Report May</td>
                                                <th>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-info text-white"><i class="fa-regular fa-eye"></i></button>
                                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-download"></i></button>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>May 2024</td>
                                                <td>Monthly Procurement Report May</td>
                                                <th>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-info text-white"><i class="fa-regular fa-eye"></i></button>
                                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-download"></i></button>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>June 2024</td>
                                                <td>Monthly Report June</td>
                                                <th>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-info text-white"><i class="fa-regular fa-eye"></i></button>
                                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-download"></i></button>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>June 2024</td>
                                                <td>Monthly Procurement Report June</td>
                                                <th>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-info text-white"><i class="fa-regular fa-eye"></i></button>
                                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-download"></i></button>
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                                <!-- Report content goes here -->
                                <!-- Report content goes here -->
                                <!-- Report content goes here -->
                                <!-- Report content goes here -->
                            </div>
                            <div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
                                <!-- Inventory content goes here -->
                                <div class="container mt-5">
                                    <div style="letter-spacing: 3px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2>INVENTORY</h2>
                                            </div>
                                            <div class="col-md-6">
                                                <form class="d-flex" role="search">
                                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                                </form>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-dark table-hover text-center table-bordered ">
                                                <thead>
                                                    <th>P.O CODE</th>
                                                    <th>IMAGE</th>
                                                    <th>NAME</th>
                                                    <th>KG</th>
                                                    <th>QUANTITY</th>
                                                    <th>PRICE</th>
                                                    <th>TOTAL</th>
                                                </thead>
                                                <tbody class="align-middle">
                                                    <tr>
                                                        <td>KIKOCP</td>
                                                        <td><img src="../img/cocopandan.png" class="rounded img-thumbnail" style="width: 100px;" alt=""></td>
                                                        <td>Coco Pandan</td>
                                                        <td>25</td>
                                                        <td>5</td>
                                                        <td>1,000</td>
                                                        <td>5,000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                    <!-- Inventory content goes here -->
                                    <!-- Inventory content goes here -->
                                    <!-- Inventory content goes here -->
                                </div>

                            </div>
                            <div class="tab-pane fade" id="procurement" role="tabpanel" aria-labelledby="procurement-tab">
                                <!-- Procurement content goes here -->
                                <div class="container mt-5">
                                    <div style="letter-spacing: 3px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2>PROCUREMENT</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card container-fluid p-0">
                                        <div class="card-header fw-bolder">
                                            Procurement Form
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                            <option selected>Select Supplier</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <label for="floatingSelect">Supplier</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInputDisabled" placeholder="Supplier Contact" readonly disabled>
                                                        <label for="floatingInputDisabled">Contact Number</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInputDisabled" placeholder="Contact Person" readonly disabled>
                                                        <label for="floatingInputDisabled">Contact Person</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                            <option selected>Select Products</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <label for="floatingSelect">Products</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="Enter Quantity">
                                                        <label for="floatingInput">Quantity</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="Unit Price">
                                                        <label for="floatingInput">Unit Price</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="Unit Price" readonly style="cursor:not-allowed;">
                                                        <label for="floatingInput">Total Price</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="row justify-content-end d-flex">
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="floatingInput" placeholder="Generated By">
                                                            <label for="floatingInput">Generated By</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 d-md-flex align-items-center">
                                                        <button class="btn btn-info text-white ms-auto mt-3">Add Item</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="card-footer">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-alternate text-center text-uppercase">
                                                    <thead>
                                                        <tr>
                                                            <th>Supplier Name</th>
                                                            <th>Product Name</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th>Subtotal</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Kiko</td>
                                                            <td>Coco Pandan</td>
                                                            <td>4</td>
                                                            <td>1,340</td>
                                                            <td>5,360</td>
                                                            <td>
                                                                <div class="btn-group" role="group" aria-label="btn-group products">
                                                                    <button class="btn btn-info text-white"><i class="fa-regular fa-pen-to-square"></i></button>
                                                                    <button class="btn btn-danger text-white"><i class="fa-solid fa-delete-left"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="4" class="text-end">Total</th>
                                                            <th>5,360</th>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-sm-flex justify-content-end"><button class="btn btn-primary mt-3">Submit</button></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Procurement content goes here -->
                                <!-- Procurement content goes here -->
                                <!-- Procurement content goes here -->
                            </div>
                            <div class="tab-pane fade" id="stock-ledger" role="tabpanel" aria-labelledby="stock-ledger-tab">
                                <!-- Stock Ledger content goes here -->
                                <div class="container mt-5">
                                    <div style="letter-spacing: 3px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2>STOCK LEDGER</h2>
                                            </div>
                                            <div class="col-md-6">
                                                <form class="d-flex" role="search">
                                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                                </form>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-responsive table-dark table-hover text-center table-bordered ">
                                                <thead>
                                                    <th>P.O CODE</th>
                                                    <th>IMAGE</th>
                                                    <th>NAME</th>
                                                    <th>SUPPLIER</th>
                                                    <th>KG</th>
                                                    <th>QUANTITY</th>
                                                    <th>
                                                        PRICE
                                                    </th>
                                                    <th>TOTAL</th>
                                                </thead>
                                                <tbody class="align-middle">
                                                    <tr>
                                                        <td>KIKOCP</td>
                                                        <td><img src="../img/cocopandan.png" class="rounded img-thumbnail" style="width: 100px;" alt=""></td>
                                                        <td>Coco Pandan</td>
                                                        <td>KIKO</td>
                                                        <td>25</td>
                                                        <td>5</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <span class="input-group-text">1,000</span>
                                                                <select class="form-select" id="floatingInputGroup2" required>
                                                                    <option value="Cash">Cash</option>
                                                                    <option value="Loan">Loan</option>
                                                                    <option value="Reseller">Reseller</option>
                                                                    <option value="Wholesale">Wholesale</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>5,000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                    <!-- Stock Ledger content goes here -->
                                    <!-- Stock Ledger content goes here -->
                                    <!-- Stock Ledger content goes here -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                                <!-- Client content goes here -->
                                <div class="container mt-5">
                                    <div style="letter-spacing: 3px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2>CLIENTS</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-alternate table-bordered text-uppercase table-dark text-center align-middle table-hover">
                                            <thead>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Hero Dolot</td>
                                                    <td>#10 Ruby St. Sta Lucia Village Phase V Punturin Valenzuela City</td>
                                                    <td>09055270361</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="btn-group clients-table">
                                                            <button class="btn btn-info text-white"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Client content goes here -->
                                <!-- Client content goes here -->
                                <!-- Client content goes here -->
                            </div>
                        </div>
                    </div>
        </section>
        <?php
        include '../components/footer.php';
        ?>
    </div>
</div>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });

    // pintig Palay data
    const pintigPalay = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Pintig Palay Data',
            backgroundColor: 'rgba(92, 184, 92, 0.2)', // Green color for success
            borderColor: 'rgba(92, 184, 92, 1)', // Dark green color for success
            borderWidth: 1,
            data: [800, 1200, 1000, 1500, 1800, 1600] // Sample pintig palay amounts for each month
        }]
    };

    // Create Pintig Palay Chart
    const ctxPintigPalay = document.getElementById('pintigPalayChart').getContext('2d');
    const pintigPalayChart = new Chart(ctxPintigPalay, {
        type: 'bar',
        data: pintigPalay,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        var downPaymentCheckbox = document.getElementById("downPaymentCheckbox");
        var downPaymentAmount = document.getElementById("downPaymentAmount");

        downPaymentCheckbox.addEventListener("change", function() {
            if (this.checked) {
                downPaymentAmount.style.display = "block";
            } else {
                downPaymentAmount.style.display = "none";
            }
        });
    });
</script>

<script src="../../hdCo/ajax/datepicker.js"></script>
<!-- <script src="../..//js/main.js"></script> -->