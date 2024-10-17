function verifyTolerance({
  inputId,

  toleranceId,

  tolMin = 0,

  tolMax = Infinity,
}) {
  const inputValue = parseFloat(document.getElementById(inputId).value);

  const toleranceElement = document.getElementById(toleranceId);

  // Check if no value is entered
  if (isNaN(inputValue)) {
    toleranceElement.classList.remove("bg-tolerance-ok", "bg-tolerance-wrong");

    toleranceElement.classList.add("bg-tolerance-default");
  }

  // Check if the entered value is within tolerance
  else if (inputValue >= tolMin && inputValue <= tolMax) {
    toleranceElement.classList.remove(
      "bg-tolerance-wrong",
      "bg-tolerance-default"
    );

    toleranceElement.classList.add("bg-tolerance-ok");
  } else {
    toleranceElement.classList.remove(
      "bg-tolerance-ok",
      "bg-tolerance-default"
    );

    toleranceElement.classList.add("bg-tolerance-wrong");
  }
}

window.addEventListener("DOMContentLoaded", function () {
  verifyTolerance({
    inputId: "lengthL",
    toleranceId: "toleranceLengthL",
    tolMin: 413.5 - 6,
    tolMax: 413.5,
  });

  // Dynamic tolerance change - Diameter D
  verifyTolerance({
    inputId: "diameterD",
    toleranceId: "toleranceDiameterD",
    tolMin: 163,
    tolMax: 163 + 0.9,
  });

  // Dynamic tolerance change - Mass M

  verifyTolerance({
    inputId: "massM",
    toleranceId: "toleranceMassM",
    tolMax: 7650,
  });

  // Dynamic tolerance change - Thickness Sample 1 Before Shrink Test
  verifyTolerance({
    inputId: "thickness1BeforeShrinkFit",
    toleranceId: "toleranceThickness1BeforeShrinkFit",
    tolMin: 0.23,
    tolMax: 0.3,
  });

  // Dynamic tolerance change - Force Sample 1 Before Shrink Test
  verifyTolerance({
    inputId: "force1BeforeShrinkFit",
    toleranceId: "toleranceForce1BeforeShrinkFit",
    tolMin: 1820,
  });

  // Dynamic tolerance change - Thickness Sample 2 Before Shrink Test
  verifyTolerance({
    inputId: "thickness2BeforeShrinkFit",
    toleranceId: "toleranceThickness2BeforeShrinkFit",
    tolMin: 0.23,
    tolMax: 0.3,
  });

  // Dynamic tolerance change - Force Sample 2 Before Shrink Test
  verifyTolerance({
    inputId: "force2BeforeShrinkFit",
    toleranceId: "toleranceForce2BeforeShrinkFit",
    tolMin: 1820,
  });

  // Dynamic tolerance change - Thickness Sample 3 Before Shrink Test
  verifyTolerance({
    inputId: "thickness3BeforeShrinkFit",
    toleranceId: "toleranceThickness3BeforeShrinkFit",
    tolMin: 0.23,
    tolMax: 0.3,
  });

  // Dynamic tolerance change - Force Sample 3 Before Shrink Test
  verifyTolerance({
    inputId: "force3BeforeShrinkFit",
    toleranceId: "toleranceForce3BeforeShrinkFit",
    tolMin: 1820,
  });

  // Dynamic tolerance change - Thickness Sample 4 Before Shrink Test
  verifyTolerance({
    inputId: "thickness4BeforeShrinkFit",
    toleranceId: "toleranceThickness4BeforeShrinkFit",
    tolMin: 0.23,
    tolMax: 0.3,
  });

  // Dynamic tolerance change - Force Sample 4 Before Shrink Test
  verifyTolerance({
    inputId: "force4BeforeShrinkFit",
    toleranceId: "toleranceForce4BeforeShrinkFit",
    tolMin: 1820,
  });

  // Dynamic tolerance change - Thickness Sample 5 Before Shrink Test
  verifyTolerance({
    inputId: "thickness5BeforeShrinkFit",
    toleranceId: "toleranceThickness5BeforeShrinkFit",
    tolMin: 0.23,
    tolMax: 0.3,
  });

  // Dynamic tolerance change - Force Sample 5 Before Shrink Test
  verifyTolerance({
    inputId: "force5BeforeShrinkFit",
    toleranceId: "toleranceForce5BeforeShrinkFit",
    tolMin: 1820,
  });

  // Dynamic tolerance change - Thickness Sample 1 After Shrink Test
  verifyTolerance({
    inputId: "thickness1AfterShrinkFit",
    toleranceId: "toleranceThickness1AfterShrinkFit",
    tolMin: 0.23,
    tolMax: 0.3,
  });

  // Dynamic tolerance change - Force Sample 1 After Shrink Test
  verifyTolerance({
    inputId: "force1AfterShrinkFit",
    toleranceId: "toleranceForce1AfterShrinkFit",
    tolMin: 1820,
  });

  // Dynamic tolerance change - Thickness Sample 2 After Shrink Test
  verifyTolerance({
    inputId: "thickness2AfterShrinkFit",
    toleranceId: "toleranceThickness2AfterShrinkFit",
    tolMin: 0.23,
    tolMax: 0.3,
  });

  // Dynamic tolerance change - Force Sample 2 After Shrink Test
  verifyTolerance({
    inputId: "force2AfterShrinkFit",
    toleranceId: "toleranceForce2AfterShrinkFit",
    tolMin: 1820,
  });

  // Dynamic tolerance change - Thickness Sample 3 After Shrink Test
  verifyTolerance({
    inputId: "thickness3AfterShrinkFit",
    toleranceId: "toleranceThickness3AfterShrinkFit",
    tolMin: 0.23,
    tolMax: 0.3,
  });

  // Dynamic tolerance change - Force Sample 3 After Shrink Test
  verifyTolerance({
    inputId: "force3AfterShrinkFit",
    toleranceId: "toleranceForce3AfterShrinkFit",
    tolMin: 1820,
  });

  // Dynamic tolerance change - Thickness Sample 4 After Shrink Test
  verifyTolerance({
    inputId: "thickness4AfterShrinkFit",
    toleranceId: "toleranceThickness4AfterShrinkFit",
    tolMin: 0.23,
    tolMax: 0.3,
  });

  // Dynamic tolerance change - Force Sample 4 After Shrink Test
  verifyTolerance({
    inputId: "force4AfterShrinkFit",
    toleranceId: "toleranceForce4AfterShrinkFit",
    tolMin: 1820,
  });

  // Dynamic tolerance change - Thickness Sample 5 After Shrink Test
  verifyTolerance({
    inputId: "thickness5AfterShrinkFit",
    toleranceId: "toleranceThickness5AfterShrinkFit",
    tolMin: 0.23,
    tolMax: 0.3,
  });

  // Dynamic tolerance change - Force Sample 5 After Shrink Test
  verifyTolerance({
    inputId: "force5AfterShrinkFit",
    toleranceId: "toleranceForce5AfterShrinkFit",
    tolMin: 1820,
  });

  // Dynamic tolerance change - df1
  verifyTolerance({
    inputId: "df1",
    toleranceId: "toleranceDf1",
    tolMin: 174,
    tolMax: 174 + 2,
  });

  // Dynamic tolerance change - df2
  verifyTolerance({
    inputId: "df2",
    toleranceId: "toleranceDf2",
    tolMin: 174,
    tolMax: 174 + 2,
  });

  // Dynamic tolerance change - df3
  verifyTolerance({
    inputId: "df3",
    toleranceId: "toleranceDf3",
    tolMin: 174,
    tolMax: 174 + 2,
  });

  // Dynamic tolerance change - mt
  verifyTolerance({
    inputId: "mt",
    toleranceId: "toleranceMt",
    tolMax: 8700,
  });
});

// Dynamic tolerance change - Length L
document.getElementById("lengthL").addEventListener("input", () => {
  verifyTolerance({
    inputId: "lengthL",
    toleranceId: "toleranceLengthL",
    tolMin: 413.5 - 6,
    tolMax: 413.5,
  });
});

// Dynamic tolerance change - Diameter D
document.getElementById("diameterD").addEventListener("input", () => {
  verifyTolerance({
    inputId: "diameterD",
    toleranceId: "toleranceDiameterD",
    tolMin: 163,
    tolMax: 163 + 0.9,
  });
});

// Dynamic tolerance change - Mass M
document.getElementById("massM").addEventListener("input", () => {
  verifyTolerance({
    inputId: "massM",
    toleranceId: "toleranceMassM",
    tolMax: 7650,
  });
});

// Dynamic tolerance change - Thickness Sample 1 Before Shrink Test
document
  .getElementById("thickness1BeforeShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "thickness1BeforeShrinkFit",
      toleranceId: "toleranceThickness1BeforeShrinkFit",
      tolMin: 0.23,
      tolMax: 0.3,
    });
  });

// Dynamic tolerance change - Force Sample 1 Before Shrink Test
document
  .getElementById("force1BeforeShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "force1BeforeShrinkFit",
      toleranceId: "toleranceForce1BeforeShrinkFit",
      tolMin: 1820,
    });
  });

// Dynamic tolerance change - Thickness Sample 2 Before Shrink Test
document
  .getElementById("thickness2BeforeShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "thickness2BeforeShrinkFit",
      toleranceId: "toleranceThickness2BeforeShrinkFit",
      tolMin: 0.23,
      tolMax: 0.3,
    });
  });

// Dynamic tolerance change - Force Sample 2 Before Shrink Test
document
  .getElementById("force2BeforeShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "force2BeforeShrinkFit",
      toleranceId: "toleranceForce2BeforeShrinkFit",
      tolMin: 1820,
    });
  });

// Dynamic tolerance change - Thickness Sample 3 Before Shrink Test
document
  .getElementById("thickness3BeforeShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "thickness3BeforeShrinkFit",
      toleranceId: "toleranceThickness3BeforeShrinkFit",
      tolMin: 0.23,
      tolMax: 0.3,
    });
  });

// Dynamic tolerance change - Force Sample 3 Before Shrink Test
document
  .getElementById("force3BeforeShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "force3BeforeShrinkFit",
      toleranceId: "toleranceForce3BeforeShrinkFit",
      tolMin: 1820,
    });
  });

// Dynamic tolerance change - Thickness Sample 4 Before Shrink Test
document
  .getElementById("thickness4BeforeShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "thickness4BeforeShrinkFit",
      toleranceId: "toleranceThickness4BeforeShrinkFit",
      tolMin: 0.23,
      tolMax: 0.3,
    });
  });

// Dynamic tolerance change - Force Sample 4 Before Shrink Test
document
  .getElementById("force4BeforeShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "force4BeforeShrinkFit",
      toleranceId: "toleranceForce4BeforeShrinkFit",
      tolMin: 1820,
    });
  });

// Dynamic tolerance change - Thickness Sample 5 Before Shrink Test
document
  .getElementById("thickness5BeforeShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "thickness5BeforeShrinkFit",
      toleranceId: "toleranceThickness5BeforeShrinkFit",
      tolMin: 0.23,
      tolMax: 0.3,
    });
  });

// Dynamic tolerance change - Force Sample 5 Before Shrink Test
document
  .getElementById("force5BeforeShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "force5BeforeShrinkFit",
      toleranceId: "toleranceForce5BeforeShrinkFit",
      tolMin: 1820,
    });
  });

// Dynamic tolerance change - Thickness Sample 1 After Shrink Test
document
  .getElementById("thickness1AfterShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "thickness1AfterShrinkFit",
      toleranceId: "toleranceThickness1AfterShrinkFit",
      tolMin: 0.23,
      tolMax: 0.3,
    });
  });

// Dynamic tolerance change - Force Sample 1 After Shrink Test
document
  .getElementById("force1AfterShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "force1AfterShrinkFit",
      toleranceId: "toleranceForce1AfterShrinkFit",
      tolMin: 1820,
    });
  });

// Dynamic tolerance change - Thickness Sample 2 After Shrink Test
document
  .getElementById("thickness2AfterShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "thickness2AfterShrinkFit",
      toleranceId: "toleranceThickness2AfterShrinkFit",
      tolMin: 0.23,
      tolMax: 0.3,
    });
  });

// Dynamic tolerance change - Force Sample 2 After Shrink Test
document
  .getElementById("force2AfterShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "force2AfterShrinkFit",
      toleranceId: "toleranceForce2AfterShrinkFit",
      tolMin: 1820,
    });
  });

// Dynamic tolerance change - Thickness Sample 3 After Shrink Test
document
  .getElementById("thickness3AfterShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "thickness3AfterShrinkFit",
      toleranceId: "toleranceThickness3AfterShrinkFit",
      tolMin: 0.23,
      tolMax: 0.3,
    });
  });

// Dynamic tolerance change - Force Sample 3 After Shrink Test
document
  .getElementById("force3AfterShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "force3AfterShrinkFit",
      toleranceId: "toleranceForce3AfterShrinkFit",
      tolMin: 1820,
    });
  });

// Dynamic tolerance change - Thickness Sample 4 After Shrink Test
document
  .getElementById("thickness4AfterShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "thickness4AfterShrinkFit",
      toleranceId: "toleranceThickness4AfterShrinkFit",
      tolMin: 0.23,
      tolMax: 0.3,
    });
  });

// Dynamic tolerance change - Force Sample 4 After Shrink Test
document
  .getElementById("force4AfterShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "force4AfterShrinkFit",
      toleranceId: "toleranceForce4AfterShrinkFit",
      tolMin: 1820,
    });
  });

// Dynamic tolerance change - Thickness Sample 5 After Shrink Test
document
  .getElementById("thickness5AfterShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "thickness5AfterShrinkFit",
      toleranceId: "toleranceThickness5AfterShrinkFit",
      tolMin: 0.23,
      tolMax: 0.3,
    });
  });

// Dynamic tolerance change - Force Sample 5 After Shrink Test
document
  .getElementById("force5AfterShrinkFit")
  .addEventListener("input", () => {
    verifyTolerance({
      inputId: "force5AfterShrinkFit",
      toleranceId: "toleranceForce5AfterShrinkFit",
      tolMin: 1820,
    });
  });

// Dynamic tolerance change - df1
document.getElementById("df1").addEventListener("input", () => {
  verifyTolerance({
    inputId: "df1",
    toleranceId: "toleranceDf1",
    tolMin: 174,
    tolMax: 174 + 2,
  });
});

// Dynamic tolerance change - df2
document.getElementById("df2").addEventListener("input", () => {
  verifyTolerance({
    inputId: "df2",
    toleranceId: "toleranceDf2",
    tolMin: 174,
    tolMax: 174 + 2,
  });
});

// Dynamic tolerance change - df3
document.getElementById("df3").addEventListener("input", () => {
  verifyTolerance({
    inputId: "df3",
    toleranceId: "toleranceDf3",
    tolMin: 174,
    tolMax: 174 + 2,
  });
});

// Dynamic tolerance change - mt
document.getElementById("mt").addEventListener("input", () => {
  verifyTolerance({
    inputId: "mt",
    toleranceId: "toleranceMt",
    tolMax: 8700,
  });
});

/*
  // Automatic update of the remaining character count for the field
  document.addEventListener("DOMContentLoaded", function () {
    const comment = document.getElementById("operationComment");
    const charCount = document.getElementById("charCount");
  
    comment.addEventListener("input", function () {
      const currentLength = comment.value.length;
      charCount.textContent = `${currentLength}/255 characters`;
    });
  });
  
  // Automatic update of the remaining character count for the field
  document.addEventListener("DOMContentLoaded", function () {
    const comment = document.getElementById("qualityComment");
    const charCount = document.getElementById("charCount2");
  
    comment.addEventListener("input", function () {
      const currentLength = comment.value.length;
      charCount.textContent = `${currentLength}/255 characters`;
    });
  });*/
