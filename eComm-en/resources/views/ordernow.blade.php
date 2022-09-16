@extends('master')
@section("content")

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<div class="custom-product">
     <div class="col-sm-10">
       
<h2>HTML Table</h2>

<table>
 
  <tr>
    <td> Amount</td>
    <td>${{$total}}</td>
 
  </tr>
   <tr>
    <td>Tax</td>
    <td>$ 0</td>

  </tr>
   <tr>
    <td>Delivery Charges</td>
    <td>$10</td>

  </tr>
    </tr>
   <tr>
    <td>Total Amount</td>
    <td>${{$total + 10}}</td>

  </tr>



</table>
<br>
<br>
<div>

    <form action="/action_page.php">
  <div class="form-group">
    Address
   <textarea type="email" placeholder="enter your address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
  <input type="radio" name="payment" id=""> <span>Online Payment</span> <br><br>
  <input type="radio" name="payment" id=""> <span>EMI Payment</span> <br><br>
    <input type="radio" name="payment" id=""> <span>Payment on Delivery</span> 
  </div>
  
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
</div>
     </div>
</div>


@endsection 
