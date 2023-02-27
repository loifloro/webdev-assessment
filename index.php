<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>John Lois Floro | Web Developer Internship Initial Assessment</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="main.css" />
</head>

<body>
  <main>
    <form class="form" action="success.php" method="POST">
      <div class="form__card">
        <div class="form__title">
          <h1>Web Developer Internship Initial Assessment</h1>
          <p>by John Lois Floro</p>
        </div>

        <div class="form__input">
          <div class="form__item">
            <label for="first-name">First Name</label>
            <input type="text" name="first-name" id="first-name" placeholder="ex. Juan " required />
          </div>
          <div class="form__item">
            <label for="last-name">Last Name</label>
            <input type="text" name="last-name" id="last-name" placeholder="ex. Dela Cruz" required />
          </div>
          <div class="form__item form__item--two">
            <div>
              <label for="dob">Date of Birth</label>
              <input type="date" name="dob" id="dob" required />
            </div>

            <div>
              <label for="gender">Gender</label>
              <!-- <input type="text" name="gender" id="gender" /> -->
              <select name="gender" id="" required>
                <option value="Male" selected>Male</option>
                <option value="Female" selected>Female</option>
              </select>
            </div>
          </div>

          <button type="submit">Submit</button>
        </div>
      </div>
    </form>
  </main>
</body>

</html>