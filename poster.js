
function postData(url="", data={}, application="application/json") {
    
    fetch(url, {
    method: 'POST', 
    headers: {
        'Content-Type': application,
    },
    body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(data => {
    console.log('Success:', data);
    })
    .catch(error => {
        console.log('Error happened here!');
        console.error(error)
    })
}