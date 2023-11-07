<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step Form</title>
    <style>
        .step-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }
    </style>
</head>
<body>



<div class="step-form">
    <h1>Task 2</h1>
    <p>Not Sure if this is what you meant by task 2 </p>
    <form id="stepForm">
        <div class="form-step active" id="step1">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <button type="button" class="next-btn">Next</button>
        </div>

        <div class="form-step" id="step2">
            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" required><br>
            <button type="button" class="prev-btn">Previous</button>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
    //
<script>
    const form = document.getElementById('stepForm');
    const steps = Array.from(document.querySelectorAll('.form-step'));
    let currentStep = 0;

    const showStep = (stepIndex) => {
        steps.forEach((step, index) => {
            if (index === stepIndex) {
       step.classList.add('active');
            } else {
                step.classList.remove('active');
   }
        });
    };

    const handleNext = () => {
        if (currentStep < steps.length - 1) {
      currentStep++;
      showStep(currentStep);
        }
    };

    const handlePrevious = () => {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    };

    document.querySelector('.next-btn').addEventListener('click', handleNext);
    document.querySelector('.prev-btn').addEventListener('click', handlePrevious);
</script>

</body>
</html>
