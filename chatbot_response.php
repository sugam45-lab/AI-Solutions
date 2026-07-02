<?php

$message = strtolower(trim($_POST['message']));

if(strpos($message,"hello")!==false || strpos($message,"hi")!==false){

echo "Hello! Welcome to AI-Solutions. How can I help you today?";

}

elseif(strpos($message,"service")!==false){

echo "We provide AI Consulting, Machine Learning, Data Analytics, AI Chatbots and Cloud AI Solutions.";

}

elseif(strpos($message,"contact")!==false){

echo "Email: info@aisolutions.com | Phone: +977-9800000000 | Kathmandu, Nepal";

}

elseif(strpos($message,"price")!==false || strpos($message,"cost")!==false){

echo "Pricing depends on your project. Please submit an enquiry through our Contact Us page.";

}

elseif(strpos($message,"thank")!==false){

echo "You're welcome! Have a great day.";

}

else{

echo "Sorry, I didn't understand that. Please ask about our services, pricing or contact information.";

}

?>