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
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-6">
                        <h1 class="text-end">HD Company</h1>
                    </div>
                </div>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="lending-tab" data-bs-toggle="tab" data-bs-target="#lending" type="button" role="tab" aria-controls="lending" aria-selected="true">Lending</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pintig-palay-tab" data-bs-toggle="tab" data-bs-target="#pintig-palay" type="button" role="tab" aria-controls="pintig-palay" aria-selected="false">Pintig Palay</button>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="lending" role="tabpanel" aria-labelledby="lending-tab">
                        <div class="section-charts mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="width: 100%;">
                                        <canvas id="lendingChart"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header fw-bolder">
                                            Lending Recent Transactions
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-alternate table-responsive text-center table-info">
                                                <thead>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Amount</th>
                                                </thead>
                                                <tbody>
                                                    <!-- L= Lending M=Month 01=Day Date 05=Month Date 2024=Year Date 01=Auto Increment -->
                                                    <tr>
                                                        <td>LM0105202401</td>
                                                        <td>John Doe</td>
                                                        <td>₱10,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LM0105202401</td>
                                                        <td>John Doe</td>
                                                        <td>₱10,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LM0105202401</td>
                                                        <td>John Doe</td>
                                                        <td>₱10,000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Button to trigger the modal -->
                                    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addTransactionModal">
                                        Add Transaction
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="addTransactionModal" tabindex="-1" aria-labelledby="addTransactionModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addTransactionModalLabel">Add Lending Transaction</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
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
                                                        <div class="row">
                                                            <div class="col-md-11">
                                                                <small>If no collateral please checkbox and add comment</small>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <input type="checkbox" name="noCollateralCheckbox" id="noCollateralCheckbox">
                                                            </div>
                                                        </div>
                                                        <div id="additionalData" style="display: none;">
                                                            <!-- Comment box -->
                                                            <div class="form-floating mt-2">
                                                                <textarea class="form-control" placeholder="Comments" id="commentsTextarea"></textarea>
                                                                <label for="commentsTextarea">Comments</label>
                                                            </div>
                                                            <!-- File upload input for image proof -->
                                                            <div class="form-group mt-2">
                                                                <input type="file" class="form-control-file" id="imageProof">
                                                                <label for="imageProof">Upload Image Proof</label>
                                                            </div>
                                                        </div>
                                                        <!-- Collateral select dropdown -->
                                                        <div class="form-floating mt-2" id="collateralSelectContainer">
                                                            <select class="form-select" id="collateralSelect" aria-label="Floating label select example" required>
                                                                <option selected disabled>Collateral</option>
                                                                <option value="1">ATM Card</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <label for="collateralSelect">Collateral</label>
                                                        </div>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">₱</span>
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="amountInput" placeholder="Amount">
                                                            <label for="amountInput">Amount</label>
                                                        </div>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Start Date</span>
                                                        <input type="text" class="form-control" id="startDateInput" placeholder="Start Date">
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Due Date</span>
                                                        <input type="text" class="form-control" id="dueDateInput" placeholder="Due Date">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pintig-palay" role="tabpanel" aria-labelledby="pintig-palay-tab">
                        <div class="section-charts mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="width: 100%;">
                                        <canvas id="pintigPalayChart"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header fw-bolder">
                                            Pintig Palay Recent Transactions
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-alternate table-responsive text-center table-success">
                                                <thead>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Quantity</th>
                                                    <th>Amount</th>
                                                    <th>Type</th>
                                                </thead>
                                                <tbody>
                                                    <!-- M= Lending M=Month 01=Day Date 05=Month Date 2024=Year Date 01=Auto Increment -->
                                                    <tr>
                                                        <td>PM0105202401</td>
                                                        <td>John Doe</td>
                                                        <td>4</td>
                                                        <td>₱3,000</td>
                                                        <td>Cash</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PM0105202401</td>
                                                        <td>John Doe</td>
                                                        <td>4</td>
                                                        <td>₱3,000</td>
                                                        <td>Loan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PM0105202401</td>
                                                        <td>John Doe</td>
                                                        <td>4</td>
                                                        <td>₱3,000</td>
                                                        <td>Reseller</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#modalPintigPalay">
                                        Add Transaction
                                    </button>

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

                                                        <!-- Modal -->
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include '../components/footer.php';
            ?>
        </section>
    </div>
</div>


<script src="../../hdCo/js/chart.js"></script>
<script src="../../hdCo/ajax/datepicker.js"></script>
<script src="../../hdCo/js/main.js"></script>