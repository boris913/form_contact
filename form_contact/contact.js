// $(document).ready(function() {
//     // Get the telephone input element
//     var telephoneInput = $("#telephone");
  
//     // Get the country code from the user's IP address
//     var countryCode = geoip.countryCode();
  
//     // Set the country code on the telephone input element
//     telephoneInput.attr("countryCode", countryCode);
//   });
  
// $("input").intlTelInput({
//   utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
// });
//   const telephoneInput = intlTelInput(document.getElementById('telephone'), {
//     defaultCountry: 'CMR',
//   });

//   // Update the country code in the phone number input when the user changes the country code.
//   telephoneInput.on('countrychange', function() {
//     document.getElementById('country-code').textContent = this.selectedCountryData.iso2;
//   });

//   // Get the formatted phone number.
//   const formattedPhoneNumber = telephoneInput.getNumber();

//   // Check if the phone number is valid.
//   const isValidPhoneNumber = telephoneInput.isValid();

//   // Validate the phone number.
//   if (!isValidPhoneNumber) {
//     alert('The phone number is not valid.');
//   }


  // Une API externe fournit l'adresse IP de l'utilisateur 
  const ipAPI = 'https://api.ipify.org?format=json';
  
  // Fonction pour récupérer le code de pays à partir de l'adresse IP
  async function getCountryCode() {
    const response = await fetch(ipAPI);
    const data = await response.json();
    const ipAddress = data.ip;
  
    // Une autre API externe fournit les détails de géolocalisation basés sur l'adresse IP
    const geoAPI = `https://ipapi.co/${ipAddress}/json/`;
    const geoResponse = await fetch(geoAPI);
    const geoData = await geoResponse.json();
  
    return geoData.country_calling_code;
  }
  
  // Événement qui se produit lorsqu'un utilisateur saisit des données dans le champ de téléphone
//   $("#telephone").on("input", async function() {
//     const countryCode = await getCountryCode();
//     $(this).attr("countryCode", "+" + countryCode);
//     $("#country-code").text("+" + countryCode);
//   });

// Événement qui se produit lorsqu'un utilisateur saisit des données dans le champ de téléphone
$("#telephone").on("input", async function() {
    let countryCode = await getCountryCode();
    
    $(this).attr("countryCode", countryCode);
    $("#country-code").val( countryCode);
  });



