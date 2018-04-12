<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <title>Editable Invoice</title>
    <style type="text/css">
        /*
     CSS-Tricks Example
     by Chris Coyier
     http://css-tricks.com
*/

        * { margin: 0; padding: 0; }
        body { font: 14px/1.4 Georgia, serif; }
        #page-wrap { width: 800px; margin: 0 auto; }

        textarea { border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; }
        table { border-collapse: collapse; }
        table td, table th { border: 1px solid black; padding: 5px; }

        #header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

        #address { width: 250px; height: 150px; float: left; }
        #customer { overflow: hidden; }

        #logo { text-align: right; float: right; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; max-height: 100px; overflow: hidden; }
        #logo:hover, #logo.edit { border: 1px solid #000; margin-top: 0px; max-height: 125px; }
        #logoctr { display: none; }
        #logo:hover #logoctr, #logo.edit #logoctr { display: block; text-align: right; line-height: 25px; background: #eee; padding: 0 5px; }
        #logohelp { text-align: left; display: none; font-style: italic; padding: 10px 5px;}
        #logohelp input { margin-bottom: 5px; }
        .edit #logohelp { display: block; }
        .edit #save-logo, .edit #cancel-logo { display: inline; }
        .edit #image, #save-logo, #cancel-logo, .edit #change-logo, .edit #delete-logo { display: none; }
        #customer-title { font-size: 20px; font-weight: bold; float: left; }

        #meta { margin-top: 1px; width: 300px; float: right; }
        #meta td { text-align: right;  }
        #meta td.meta-head { text-align: left; background: #eee; }
        #meta td textarea { width: 100%; height: 20px; text-align: right; }

        #items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
        #items th { background: #eee; }
        #items textarea { width: 80px; height: 50px; }
        #items tr.item-row td { border: 0; vertical-align: top; }
        #items td.description { width: 300px; }
        #items td.item-name { width: 170px; }
        #items td.description textarea, #items td.item-name textarea { width: 100%; }
        #items td.total-line { border-right: 0; text-align: right; }
        #items td.total-value { border-left: 0; padding: 10px; }
        #items td.total-value textarea { height: 20px; background: none; }
        #items td.balance { background: #eee; }
        #items td.blank { border: 0; }

        #terms { text-align: center; margin: 20px 0 0 0; }
        #terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
        #terms textarea { width: 100%; text-align: center;}

        textarea:hover, textarea:focus, #items td.total-value textarea:hover, #items td.total-value textarea:focus, .delete:hover { background-color:#EEFF88; }

        .delete-wpr { position: relative; }
        .delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }
    </style>
</head>

<body>

<div id="page-wrap">

    <textarea id="header">INVOICE</textarea>

    <div id="identity" style="overflow: hidden">
        <div style="float: left">
        <pre>
            Aamra Infotainment Limited
            Safura Tower (16th Floor)
            20 Kemal Ataturk Avenue Banani
            Dhaka-1213, Bangladesh
            Phone: +88 01712 126874 or +88 01913 397419
        </pre>
        </div>
        <div style="float: right">
            <img src="{{asset('/')}}front/images/logo.png" alt="LOGO" width="160" height="78"/>

        </div>
    </div>

    <div style="clear:both"></div>

    <div id="customer">
        <div id="customer-title">
            Edumanager Demo
            <pre style="font-size: 12px;">
                Name: {{$customer->first_name}} {{$customer->last_name}}
                Mobile : {{$customer->mobile_number}}
                Address: {{$customer->address}}
            </pre>
        </div>

        <table id="meta">
            <tr>
                <td class="meta-head">Bank Trans ID</td>
                <td>{{$online_payments->banktransactionid}}</td>
            </tr>
            <tr>

                <td class="meta-head">Date</td>
                @php($date=strtotime($online_payments->date))
                <td>{{date("d/m/Y",$date)}}</td>
            </tr>
            <tr>
                <td class="meta-head">Total Amount</td>
                <td><div class="due">TK {{$online_payments->amount}}</div></td>
            </tr>

        </table>

    </div>

    <table id="items">

        <tr>
            <th>Bank Name</th>
            <th>Domain</th>
            <th>IP</th>
            <th>Price</th>
        </tr>

        <tr class="item-row">
            <td class="description">{{$online_payments->bank_name}}</td>
            <td class="item-name">{{$online_payments->domain}}</td>
            <td class="item-name">{{$online_payments->ip}}</span></td>
            <td class="item-name"><span class="price">TK {{$online_payments->amount}}</span></td>
        </tr>

        <tr>
            <td colspan="1" class="blank"> </td>
            <td colspan="2" class="total-line">Amount Paid</td>

            <td class="total-value">TK {{$online_payments->amount}}</td>
        </tr>

    </table>

    <div id="terms">
        <h5>Terms</h5>
        <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
    </div>

</div>

</body>

</html>