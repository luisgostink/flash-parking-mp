import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// JAVASCRIPT GEO-LOCATION

// JavaScript code to fetch and display User coordinates
let userLat;
let userLong;

function displayCoordinates(position) {
    userLat = position.coords.latitude;
    userLong = position.coords.longitude;

    // grab all the parkingspots from html (document.querySelectorAll())
    let parkingSpots = document.querySelectorAll('.parking-container');

    // Create an array to store the coordinates
    let parkingCoordinates = [];

    // Function to update distances for each parking spot
    parkingSpots.forEach(parkingSpot => {
        // Extract latitude and longitude from data attributes
        const parkingLat = parseFloat(parkingSpot.dataset.latitude);
        const parkingLong = parseFloat(parkingSpot.dataset.longitude);

        // Check if latitude and longitude are valid numbers before adding to the array
        if (!isNaN(parkingLat) && !isNaN(parkingLong)) {
            // Calculate distance
            let distance = calculateDistance(userLat, userLong, parkingLat, parkingLong);

            // Update the distance in the HTML
            let distanceElement = parkingSpot.querySelector('p:nth-child(3)');
            distanceElement.textContent = `Distance: ${distance} m.`;
        }
    });
}



function displayError(error) {
    // You can handle errors here if needed
    console.error("Error fetching coordinates:", error);
}

if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(displayCoordinates, displayError);
} else {
    // You can handle the case where geolocation is not supported
    console.error("Geolocation is not available in this browser.");
}

// Now, parkingCoordinates array contains objects with latitude and longitude for each parking spot
// console.log(parkingCoordinates);


// Calculate Distance between the user location and each parking spot. 
function calculateDistance(userLat, userLong, parkingLat, parkingLong) {
const earthRadius = 6371; // Earth's radius in kilometers

const lat1 = toRadians(userLat);
const lon1 = toRadians(userLong);
const lat2 = toRadians(parkingLat);
const lon2 = toRadians(parkingLong);

const dLat = lat2 - lat1;
const dLon = lon2 - lon1;

const a =
Math.sin(dLat / 2) * Math.sin(dLat / 2) +
Math.cos(lat1) * Math.cos(lat2) * Math.sin(dLon / 2) * Math.sin(dLon / 2);

const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

const distanceInKilometers = earthRadius * c; // Distance in kilometers
const distanceInMeters = distanceInKilometers * 1000; // Convert to meters

return distanceInMeters.toFixed(2); // Round to 2 decimal places
}

function toRadians(degrees) {
return degrees * (Math.PI / 180);
}
