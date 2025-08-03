<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Completion</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
            margin-top: 20px;
        }
        .certificate {
            width: 900px;
            height: 600px;
            background: white;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            position: relative;
            border-radius: 10px;
            overflow: hidden;
        }
        .certificate h1 {
            font-size: 50px;
            color: #1976D2;
            font-weight: bold;
            margin: 20px 0 5px;
        }
        .certificate h3 {
            font-size: 20px;
            font-weight: 600;
            margin: 0;
        }
        .certificate p {
            font-size: 18px;
            margin: 20px 0;
        }
        .recipient {
            font-size: 22px;
            font-weight: bold;
            display: block;
            width: 60%;
            margin: 10px auto;
            border-bottom: 2px solid black;
            height: 30px;
        }
        .badge {
            margin-top: 30px;
        }
        .signatures {
            display: flex;
            justify-content: space-between;
            width: 80%;
            margin: 50px auto 0;
            font-weight: bold;
        }

        /* TRIANGLE BACKGROUND DESIGN */
        .top-right {
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border-left: 150px solid transparent;
            border-bottom: 150px solid #1976D2;
        }
        .top-right::after {
            content: "";
            position: absolute;
            top: 20px;
            right: -130px;
            width: 0;
            height: 0;
            border-left: 120px solid transparent;
            border-bottom: 120px solid #0D47A1;
        }
        .bottom-left {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 0;
            border-right: 150px solid transparent;
            border-top: 150px solid #1976D2;
        }
        .bottom-left::after {
            content: "";
            position: absolute;
            bottom: 20px;
            left: -130px;
            width: 0;
            height: 0;
            border-right: 120px solid transparent;
            border-top: 120px solid #0D47A1;
        }

        /* Download Button */
        .download-btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background: #1976D2;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .download-btn:hover {
            background: #0D47A1;
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="download-btn" onclick="downloadPDF()">Download as PDF</button>
    </div>
    
    <div id="certificate" class="certificate">
        <!-- Background Triangles -->
        <div class="top-right"></div>
        <div class="bottom-left"></div>

        <h1>CERTIFICATE</h1>
        <h3>OF COMPLETION</h3>
        <p><strong>IS PRESENTED TO :</strong></p>
        <div class="recipient">{{auth()->user()->name}}</div>
        <p>For their completion of the evaluation of the project</p>
        <img class="badge" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Ambox_seal.svg/1024px-Ambox_seal.svg.png" width="80" alt="Seal">
        <div class="signatures">
            <div>ADMINISTRATOR</div>
            <div>SUPERVISOR: <h3 >Dr Maitanmi</h2> </div>
            
        </div>
    </div>

    <script>
        async function downloadPDF() {
            const { jsPDF } = window.jspdf;
            
            // Convert certificate to an image using html2canvas
            const certificateElement = document.querySelector("#certificate");
            const canvas = await html2canvas(certificateElement, { scale: 2 });
            const imageData = canvas.toDataURL("image/png");

            // Create PDF
            const pdf = new jsPDF({
                orientation: "landscape",
                unit: "px",
                format: [900, 600]
            });

            pdf.addImage(imageData, "PNG", 0, 0, 900, 600);
            pdf.save("certificate.pdf");
        }
    </script>
</body>
</html>
