// Initialize variables
let camera, scene, renderer;
const particles = [];

// Initialize Three.js
init();
animate();

function init() {
  // Create a scene
  scene = new THREE.Scene();

  // Create a camera
  camera = new THREE.PerspectiveCamera(
    75,
    window.innerWidth / window.innerHeight,
    1,
    10000
  );
  camera.position.z = 1000;

  // Create particles
  const geometry = new THREE.BufferGeometry();
  const material = new THREE.PointsMaterial({ size: 7, color: 0x954dee });

  const vertices = [];
  for (let i = 0; i < 10000; i++) {
    const x = (Math.random() - 0.5) * 2000;
    const y = (Math.random() - 0.5) * 2000;
    const z = (Math.random() - 0.5) * 2000;
    vertices.push(x, y, z);
  }

  geometry.setAttribute(
    "position",
    new THREE.Float32BufferAttribute(vertices, 3)
  );

  // Create a particle system
  const particleSystem = new THREE.Points(geometry, material);
  scene.add(particleSystem);

  // Create a WebGLRenderer and add it to the DOM
  renderer = new THREE.WebGLRenderer();
  renderer.setSize(window.innerWidth, window.innerHeight);
  document.getElementById("container").appendChild(renderer.domElement);
}

function animate() {
  requestAnimationFrame(animate);

  // Rotate the particle system
  scene.rotation.x += 0.005;
  scene.rotation.y += 0.005;

  // Render the scene
  renderer.render(scene, camera);
}
