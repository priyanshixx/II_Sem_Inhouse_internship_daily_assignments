const container = document.getElementById("photo-container");

container.innerHTML = "<h3 class='text-center'>Loading...</h3>";

fetch("https://randomuser.me/api/?results=20")

    .then(response => response.json())

    .then(data => {

        let cards = "";

        data.results.forEach(user => {

            cards += `
            <div class="col-md-4 mb-4">

                <div class="card h-100 shadow">

                    <img src="${user.picture.large}" class="card-img-top">

                    <div class="card-body">

                        <h5 class="card-title">
                            ${user.name.first} ${user.name.last}
                        </h5>

                        <p class="card-text">
                            <strong>Email:</strong><br>
                            ${user.email}
                        </p>

                        <p class="card-text">
                            <strong>Phone:</strong><br>
                            ${user.phone}
                        </p>

                        <p class="card-text">
                            <strong>Country:</strong><br>
                            ${user.location.country}
                        </p>

                    </div>

                </div>

            </div>
            `;

        });

        container.innerHTML = cards;

        document.getElementById("count").innerText = data.results.length;

    })

    .catch(error => {

        console.log(error);

        container.innerHTML = `
            <div class="alert alert-danger">
                Couldn't load users.
            </div>
        `;

    });
