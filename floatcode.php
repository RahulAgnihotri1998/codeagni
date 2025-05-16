

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-black:rgb(32, 103, 22);
            --secondary-gray:rgb(113, 212, 104);
            --accent-white: #ffffff;
            --highlight-red: #cc0000;
        }

        .chat-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            font-family: 'Arial', sans-serif;
        }

        .chat-toggle {
            background-color: var(--primary-black);
            color: var(--accent-white);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }

        .chat-toggle:hover {
            transform: scale(1.1);
            background-color: var(--secondary-gray);
        }

        .chat-window {
            width: 350px;
            background: var(--accent-white);
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            position: absolute;
            bottom: 75px;
            right: 0;
            display: none;
            overflow: hidden;
        }

        .chat-header {
            background: var(--primary-black);
            color: var(--accent-white);
            padding: 15px;
            border-bottom: 2px solid var(--highlight-red);
        }

        .Code-disclaimer {
            background: #f8f9fa;
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
            font-size: 0.9rem;
            color: var(--secondary-gray);
        }

        .disclaimer-text {
            color: var(--highlight-red);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .chat-body {
            padding: 15px;
           
            overflow-y: auto;
        }

        .contact-info {
            margin: 15px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 6px;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            color: var(--secondary-gray);
        }

        .info-item i {
            margin-right: 10px;
            color: var(--primary-black);
            min-width: 20px;
        }

        .chat-input {
            padding: 15px;
            background: var(--accent-white);
            border-top: 1px solid #e0e0e0;
        }

        input[type="text"] {
            width: 90%;
            padding: 12px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .Code-button {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: var(--primary-black);
            color: var(--accent-white);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .Code-button:hover {
            background: var(--secondary-gray);
        }

        @media (max-width: 480px) {
            .chat-window {
                width: 90vw;
                right: 5vw;
            }
        }
        #number-error {
            color: red;
            font-size: 0.8rem;
            margin-bottom: 10px;
        }
        /* Chat widget styles */
.chat-widget {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 1000;
}

.chat-toggle {
  background-color: #25d366;
  color: white;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.chat-window {
  display: none;
  position: fixed;
  bottom: 90px;
  right: 20px;
  width: 300px;
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  z-index: 1001;
}

.chat-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  background-color:rgb(220, 126, 12);
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.close-btn {
  font-size: 24px;
  cursor: pointer;
  color: white;
}

.chat-body {
  padding: 10px;
}

.chat-input {
  padding: 10px;
}

.chat-backdrop {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 999;
}
    </style>

<div class="chat-widget">
  <div class="chat-toggle">
    <i class="fab fa-whatsapp"></i>
  </div>

  <!-- Backdrop for clicking outside the chat -->
  <div class="chat-backdrop"></div>

  <div class="chat-window">
    <div class="chat-header">
      <a href="index.php">
        <img src="assets/images/header/logo-nobg.png" alt="" srcset="" style="width: 124px; height: 55px;">
      </a>
      <!-- Cross button to close the chat -->
      <span class="close-btn">&times;</span>
    </div>

    <div class="chat-body">
      <div class="info-item">
        <i class="fas fa-comment"></i>
        <div>
          <p>Start by sharing your phone number:</p>
        </div>
      </div>
    </div>

    <div class="chat-input">
      <input type="text" placeholder="Enter 10-digit phone number" id="phoneInput">
      <p id="number-error"></p>
      <div class="action-buttons">
        <button class="Code-button submitBtn" id="whatsappBtn">
          <i class="fab fa-whatsapp"></i> WhatsApp
        </button>
        <button class="Code-button submitBtn" id="callBtn">
          <i class="fas fa-phone"></i> Call
        </button>
      </div>
    </div>
  </div>
</div>
    <script>
document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.chat-toggle');
  const chatWindow = document.querySelector('.chat-window');
  const closeBtn = document.querySelector('.close-btn');
  const chatBackdrop = document.querySelector('.chat-backdrop');
  const phoneInput = document.querySelector('#phoneInput');
  const whatsappBtn = document.querySelector('#whatsappBtn');
  const callBtn = document.querySelector('#callBtn');
  const numberError = document.querySelector('#number-error');

  // Toggle chat visibility
  toggle.addEventListener('click', () => {
    chatWindow.style.display = 'block';
    chatBackdrop.style.display = 'block';
  });

  // Close chat when cross button is clicked
  closeBtn.addEventListener('click', () => {
    chatWindow.style.display = 'none';
    chatBackdrop.style.display = 'none';
  });

  // Close chat when clicking outside the chat window
  chatBackdrop.addEventListener('click', () => {
    chatWindow.style.display = 'none';
    chatBackdrop.style.display = 'none';
  });

  // Validate phone number
  function isValidIndianPhone(number) {
    return /^[6-9]\d{9}$/.test(number);
  }

  // Function to send data to Google Sheets
  function sendToGoogleSheet(phone, methodOfContact, pageUrl) {
    fetch('https://script.google.com/macros/s/AKfycbzNX2QUWEB0So1HeDpQsjznCHZmarBkpd8EXep25A4bOy5RlH2_XukmpDGCYI4q5GPF/exec', {
      method: 'POST',
      mode: 'no-cors',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ phone: phone, methodOfContact: methodOfContact, pageUrl: pageUrl }),
    })
      .then(() => {
        alert('Your data has been submitted successfully to Google Sheets!');
      })
      .catch((error) => {
        console.error('Error submitting to Google Sheets:', error);
        alert('Failed to submit data to Google Sheets.');
      });
  }

  // WhatsApp button click handler
  whatsappBtn.addEventListener('click', () => {
    const phone = phoneInput.value.trim();
    const currentPageUrl = window.location.href;

    if (isValidIndianPhone(phone)) {
      sendToGoogleSheet(phone, 'WhatsApp', currentPageUrl); // Send data to Google Sheets
      window.open(
        `https://wa.me/918218133662?text=Hello%20Code%20Agni!%20My%20number%20is%20${phone}%20and%20I%20need%20assistance%20with:`,
        '_blank'
      );
    } else {
      numberError.textContent = 'Please enter a valid 10-digit Indian phone number';
      numberError.style.display = 'block';
    }
  });

  // Call button click handler
  callBtn.addEventListener('click', () => {
    const phone = phoneInput.value.trim();
    const currentPageUrl = window.location.href;

    if (isValidIndianPhone(phone)) {
      sendToGoogleSheet(phone, 'Call', currentPageUrl); // Send data to Google Sheets
      window.location.href = 'tel:+918218133662';
    } else {
      numberError.textContent = 'Please enter a valid 10-digit Indian phone number';
      numberError.style.display = 'block';
    }
  });

  // Enter key handler for phone input
  phoneInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
      if (isValidIndianPhone(phoneInput.value)) {
        whatsappBtn.click();
      } else {
        numberError.textContent = 'Please enter a valid 10-digit Indian phone number';
        numberError.style.display = 'block';
      }
    }
  });
});

    </script>
