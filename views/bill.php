<?php
//session_start();
//require "../controller/isLogin.php"?>
<?php //require('../controller/getData.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Generate</title>
    <link rel="stylesheet" href="../public/css/bill.css">
    <script src="../public/js/jquery.js"></script>
</head>
<body>
<div class="openPrinting" id="openPrinting" style="display: flex">
    <div class="openPrinting-popup">
<div class="container">
    <div class="header">
        <h1>Medicine Bill</h1>
        <p>Bill Number: 123456</p>
        <p>Date: 2023-03-08</p>
    </div>

    <div class="bill-body">
        <form id="form">
            <div class="form-group">
                <label class="form-label" for="patient-name">Patient Name:</label>
                <input class="form-input" type="text" id="patient-name" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="contact-number">Contact Number:</label>
                <input class="form-input" type="text" id="contact-number" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="address">Address:</label>
                <input class="form-input" type="text" id="address" required>
            </div>

            <table class="bill-table">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Medicine Name</th>
                    <th>Expiry Date</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="records"></tbody>


                <tfoot>
                <tr>
                    <td colspan="4" class="total">Gross Amount:</td>
                    <td class="total" id="gross">300</td>
                </tr>
                <tr>
                    <td colspan="4" class="total">Discount Amount:</td>
                    <td class="total" id="discount">0</td>
                </tr>
                <tr>
                    <td colspan="4" class="total">Total Amount:</td>
                    <td class="total" id="total">300</td>
                </tr>

                </tfoot>
            </table>

            <div class="btn-group">
                <button class="btn" type="button" onclick="printBill()"><i class="fa-solid fa-print"></i> Print</button>
                <button class="btn" type="button" onclick="saveBill()">Save Bill Without Print</button>
            </div>
        </form>
    </div>
    <div id="records"></div>

</div>
    </div>
</div>

<script>
    const loadRecord = ()=>{
        $.ajax({
            url:'../controller/getData.php',
            type:'GET',
            dataType:'json',
            success:(response)=>{
                console.log(response);
                let list = "";
                let gross = 0;
                let discount = 0;
                response.map((item,i)=>{
                    let id = i;
                    let medName = response[i].MEDICINENAME;
                        let expDate = response[i].EXPIRYDATE;
                        let quantity = response[i].QUANTITY;
                        gross+= parseInt( response[i].MRP);
                    let discountPercentage = parseInt(response[i].DISCOUNT);
                    let discountAmount =  discountPercentage * parseInt(response[i].MRP) /100;
                    discount+= discountAmount;
                        let price = response[i].MRP;
                    list += '<tr><td>' + id + "</td><td>" + medName + "</td><td>" + expDate + "</td><td>" + quantity + "</td><td>" + price + "</td><td>X</td></tr>";
                })


                $('#records').html(list);
                $('#gross').text(gross);
                $('#discount').text(discount);
                $('#total').text(()=>{
                    return gross - discount
                })
            }
        })
    }
    loadRecord();
    setInterval(loadRecord, 1000);

    function printBill() {
        window.print();
        document.querySelectorAll('.btn').forEach(btn => {
            btn.classList.add('hidden');
        });
    }

    function saveBill() {
        const patientName = document.getElementById('patient-name').value;
        const contactNumber = document.getElementById('contact-number').value;
        const address = document.getElementById('address').value;

        const billData = {
            patientName,
            contactNumber,
            address,
            medicines: [
                {
                    name: 'Paracetamol',
                    expiryDate: '2024-03-08',
                    quantity: 10,
                    price: 100
                },
                {
                    name: 'Ibuprofen',
                    expiryDate: '2024-04-08',
                    quantity: 5,
                    price: 50
                },
                {
                    name: 'Azithromycin',
                    expiryDate: '2024-05-08',
                    quantity: 3,
                    price: 150
                }
            ]
        };

    }
</script>
</body>
</html>
