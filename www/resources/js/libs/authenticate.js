let loginForm = $('#loginForm');
loginForm.submit(function(e)
{
    e.preventDefault();
    let self = $(this);

    let data = self.serialize();
    let url = self.attr('action');
    let type = self.attr('method');
    console.log(url);

    axios.post(url, data)
        .then(function(res) {
            console.log(res);
        })
        .catch(function (error) {
            console.log(error);
        });

    console.log(data);
});