     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .lightbox-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        .lightbox-content {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            max-width: 80%;
            text-align: center;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
 
 
 
 
 
 
 
 
 <div class="lightbox-container" id="lightbox">
        <div class="lightbox-content">
            <span class="close-btn" onclick="closeLightbox()">&times;</span>
            <h2>Description Title</h2>
            <p>This is the content of the description box. You can add any text or HTML elements here to describe your content or provide information.</p>
        </div>
 </div>

  
