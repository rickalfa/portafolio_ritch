

import * as THREE from 'three';


import { FBXLoader } from './jsthree3D/jsm/loaders/FBXLoader.js';
import { GLTFLoader } from './jsthree3D/jsm/loaders/GLTFLoader.js';
import { DRACOLoader } from './jsthree3D/jsm/loaders/DRACOLoader.js';

import { OrbitControls } from './jsthree3D/jsm/controls/OrbitControls.js';



const screen_size = 200;
const screen_size_small = 650;

let mixer;

const clock = new THREE.Clock();


const scene = new THREE.Scene();
/**Scne Background Color */
scene.background = new THREE.Color(0xbfe3dd);
/** Ccene Fog add */


const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 100 );
const renderer = new THREE.WebGLRenderer();
//renderer.setPixelRatio( window.devicePixelRatio );
renderer.useLegacyLights = true;
//renderer.shadowMap.enabled = true;


//Obtenemos el 90% del ancho de la ventana 
let scren_card_size_width = 0.96 * window.innerWidth;

//obtenemos el 90% del Alto de la ventana
let screen_hight_90 = 0.98 * window.innerHeight;

renderer.setSize(scren_card_size_width, screen_hight_90 );

const canvas = document.getElementById("3Dscreen01");
canvas.appendChild( renderer.domElement );


    /**creacion de figura geometrica
      * 
      */
    const geometry = new THREE.BoxGeometry( 1, 1, 1 );
    const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
    const cube = new THREE.Mesh( geometry, material );
    //scene.add( cube );

    renderer.setAnimationLoop( animate );
			
    
    
///  REDIMENSION DE LA SCREEN DONDE SE VE EL DISEÑO 3D
/// window.addEventListener( 'resize', onWindowResize );

init();



function init()
{

         /**
       * Posicion de la CAMARA
       */
         camera.position.set( 5, 2, 8 );



    /**
     * LUCES de ambiente las agregamos desde el objeto Builder THREE 
     * y la cargamos a la escena { scene }
     */
    const hemiLight = new THREE.HemisphereLight( 0xffffff, 0xffffff, 2 );
    hemiLight.color.setHSL( 0.6, 1, 0.2 );
    hemiLight.groundColor.setHSL( 0.095, 1, 0.75 );
    hemiLight.position.set( 0, 50, 0 );
    scene.add( hemiLight );

    const hemiLightHelper = new THREE.HemisphereLightHelper( hemiLight, 10 );
    scene.add( hemiLightHelper );



      /**
             * CARGA de archivo  .glb
             */
      const dracoLoader = new DRACOLoader();
      dracoLoader.setDecoderPath( 'resources/js/jsthree3D/jsm/libs/draco/gltf/' );


      const loader = new GLTFLoader();
      loader.setDRACOLoader( dracoLoader );
      loader.load( 'resources/3dmodelos/glb/forest_house.glb', function ( gltf ) {

      const model = gltf.scene;
      //model.rotation.y = 30;
      model.position.set( 3, -1, 3 );  // position arbol
      // model.position.set( 3, 0.5, 5 );
      //model.scale.set( 0.5, 0.5, 0.5 );
      scene.add( model );

     /// mixer = new THREE.AnimationMixer( model );
     /// mixer.clipAction( gltf.animations[ 0 ] ).play();


      renderer.setAnimationLoop( animate );

      }, undefined, function ( e ) {

      console.error( e );

      } );


      const controls = new OrbitControls( camera, renderer.domElement );
      controls.addEventListener( 'change', render ); // use if there is no animation loop
      controls.minDistance = 2;
      controls.maxDistance = 10;
      controls.target.set( 0, 0, - 0.2 );
      controls.update();

                      /**
                       * REDIMENCIONAR pantalla cuando la ventana se modifica
                       */




}

function animate() {

    cube.rotation.x += 0.01;
  cube.rotation.y += 0.01;
    renderer.render( scene, camera );


}