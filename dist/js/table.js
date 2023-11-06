
$(() => {

    function getProductDetails () {
        $.ajax({
            url: base_url('Dashboard/getProductAll'),
            type: "GET", // GET, POST
            dataType: "json",
            success: function(result) {
                let html = '';
    
                result.forEach(element => {
                    html += `<tr>
                                <td>${element.id}</td>
                                <td>${element.name}</td>
                                <td>${element.position}</td>
                                <td>${element.Age}</td>
                                <td>${element.address}</td>
                            </tr>`;
                });
    
                $('#tblProduct2 tbody').html(html);
    
    
                let table2 = new DataTable('#tblProduct2');
    
            }
        })
    }
})