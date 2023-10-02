var mouseX = 0,
  mouseY = 0,
  windowHalfX = window.innerWidth / 2,
  windowHalfY = window.innerHeight / 2,
  SEPARATION = 200,
  AMOUNTX = 10,
  AMOUNTY = 10,
  camera,
  scene,
  renderer;

init();
animate();

var introSection = document.getElementById("intro");

// div for astrovoyager text
var text = document.createElement("div");
text.id = "astro-text";
text.innerText = "Astro Voyager";

// Append the text element to the #intro section
introSection.appendChild(text);

function init() {
  var container = document.getElementById("three");
  scene = new THREE.Scene();
  renderer = new THREE.WebGLRenderer({ alpha: true });
  renderer.setSize(window.innerWidth, window.innerHeight);
  container.appendChild(renderer.domElement);

  camera = new THREE.PerspectiveCamera(
    75,
    window.innerWidth / window.innerHeight,
    1,
    10000
  );
  camera.position.z = 100;

  var materials = [
    new THREE.MeshBasicMaterial({ color: 0xf896d8 }), //  pink
    new THREE.MeshBasicMaterial({ color: 0xca7df9 }), //  purple
  ];

  var geometry = new THREE.BufferGeometry();
  var positions = [];

  for (var i = 0; i < 400; i++) {
    var x = Math.random() * 2 - 1;
    var y = Math.random() * 2 - 1;
    var z = Math.random() * 2 - 1;
    var length = Math.random() * 10 + 450;
    var material = materials[Math.floor(Math.random() * materials.length)];

    positions.push(x * length, y * length, z * length);

    var sphereGeometry = new THREE.SphereGeometry(
      Math.random() * 4 + 2, // Random radius between 2 and 6
      32,
      32
    );
    var sphere = new THREE.Mesh(sphereGeometry, material);
    sphere.position.set(x * length, y * length, z * length);
    scene.add(sphere);
  }

  geometry.setAttribute(
    "position",
    new THREE.Float32BufferAttribute(positions, 3)
  );

  var sphereGeometry = new THREE.SphereGeometry(4, 32, 32);

  //offwhite dots
  var sphereMaterial = new THREE.MeshBasicMaterial({ color: 0x9d9d9d });

  for (var i = 0; i < positions.length; i += 3) {
    var sphere = new THREE.Mesh(sphereGeometry, sphereMaterial);
    sphere.position.set(positions[i], positions[i + 1], positions[i + 2]);
    scene.add(sphere);
  }

  // mousey
  document.addEventListener("mousemove", onDocumentMouseMove, false);
  document.addEventListener("touchstart", onDocumentTouchStart, false);
  document.addEventListener("touchmove", onDocumentTouchMove, false);

  window.addEventListener("resize", onWindowResize, false);
}

function onWindowResize() {
  windowHalfX = window.innerWidth / 2;
  windowHalfY = window.innerHeight / 2;

  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();

  renderer.setSize(window.innerWidth, window.innerHeight);
}

function onDocumentMouseMove(event) {
  mouseX = event.clientX - windowHalfX;
  mouseY = event.clientY - windowHalfY;
}

function onDocumentTouchStart(event) {
  if (event.touches.length > 1) {
    event.preventDefault();

    mouseX = event.touches[0].pageX - windowHalfX;
    mouseY = event.touches[0].pageY - windowHalfY;
  }
}

function onDocumentTouchMove(event) {
  if (event.touches.length == 1) {
    event.preventDefault();

    mouseX = event.touches[0].pageX - windowHalfX;
    mouseY = event.touches[0].pageY - windowHalfY;
  }
}

function animate() {
  requestAnimationFrame(animate);
  render();
}

function render() {
  camera.position.x += (mouseX - camera.position.x) * 0.05;
  camera.position.y += (-mouseY + 200 - camera.position.y) * 0.05;
  camera.lookAt(scene.position);

  renderer.render(scene, camera);
}
