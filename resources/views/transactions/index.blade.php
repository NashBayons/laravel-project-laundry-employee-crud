<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Order and Transaction</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }
    .order-transaction {
      background: linear-gradient(
          137.15deg,
          rgba(23, 232, 255, 0) 0%,
          rgba(23, 232, 255, 0.2) 100%
        ),
        linear-gradient(to left, rgba(7, 156, 214, 0.2), rgba(7, 156, 214, 0.2)),
        linear-gradient(
          119.69deg,
          rgba(93, 141, 230, 0) 0%,
          rgba(142, 176, 239, 0.1) 45.691317319869995%,
          rgba(36, 89, 188, 0.2) 96.88477516174316%
        ),
        linear-gradient(to left, rgba(47, 53, 109, 0.2), rgba(47, 53, 109, 0.2));
      height: 100vh;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      overflow: hidden;
      display: flex;
    }
    .sidebar {
      background: rgba(217, 217, 217, 0.5);
      width: 250px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100vh;
    }
    .sidebar img {
      width: 100%;
      max-width: 150px;
      margin-bottom: 20px;
    }
    .sidebar .nav-link {
      color: #000000;
      font-size: 1.2rem;
      margin: 10px 0;
      font-family: "Inter-Italic", sans-serif;
      font-style: italic;
      text-align: center;
    }
    .sidebar .log-out {
      margin-top: auto;
      font-size: 1.2rem;
      color: #000000;
      font-family: "Inter-Italic", sans-serif;
      font-style: italic;
    }
    .main-content {
      flex: 1;
      padding: 20px;
      overflow-y: auto;
    }
    .order-and-transaction {
      color: #000000;
      font-family: "Inter-Italic", sans-serif;
      font-size: 40px;
      font-style: italic;
      margin-bottom: 20px;
    }
    .service-type, .payment, .payment-method {
      color: #000000;
      font-family: "Inter-Italic", sans-serif;
      font-size: 24px;
      font-style: italic;
      margin-bottom: 10px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-control {
      border-radius: 8px;
      border: 1px solid #d9d9d9;
      padding: 10px;
    }
    .btn-dark {
      background: #2c2c2c;
      border-radius: 8px;
      color: #f5f5f5;
      padding: 10px;
      text-align: center;
      width: 100%;
    }
    .input-group-text {
      background: #d9d9d9;
      border: 1px solid #d9d9d9;
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="order-transaction">
    <div class="sidebar">
    <img src="{{ asset('img/1ds-removebg-preview.png') }}" alt="Image">
      <nav class="nav flex-column">
        <a class="nav-link" href="transaction.html">Order/ Transaction</a>
        <a class="nav-link" href="order.html">View Laundry</a>
        <a class="nav-link" href="#">admin</a>
      </nav>
      <div class="log-out">Log Out</div>
    </div>
    <div class="main-content">
      <div class="order-and-transaction">Order and Transaction:</div>
      <div class="form-group">
        <label for="orderName">Name of the order</label>
        <input type="text" class="form-control" id="orderName" placeholder="Enter order name">
      </div>
      <div class="form-group">
        <label for="weight">Weight</label>
        <div class="input-group">
          <input type="number" class="form-control" id="weight" placeholder="Enter weight">
          <div class="input-group-append">
            <span class="input-group-text">kg</span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date">
      </div>
      <div class="service-type">Service Type:</div>
      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-dark">Wash</button>
        </div>
        <div class="col">
          <button type="button" class="btn btn-dark">Fold</button>
        </div>
        <div class="col">
          <button type="button" class="btn btn-dark">Ironing</button>
        </div>
      </div>
      <div class="form-group">
        <label for="specialInstruction">Special Instruction</label>
        <textarea class="form-control" id="specialInstruction" rows="3"></textarea>
      </div>
      <div class="payment">Payment</div>
      <div class="payment-method">Payment Method:</div>
      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-dark">Card</button>
        </div>
        <div class="col">
          <button type="button" class="btn btn-dark">Cash</button>
        </div>
        <div class="col">
          <button type="button" class="btn btn-dark">Mobile</button>
        </div>
      </div>
      <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="number" class="form-control" id="amount" placeholder="Enter amount">
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>