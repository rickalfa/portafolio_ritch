/*!
* Start Bootstrap - Full Width Pics v5.0.6 (https://startbootstrap.com/template/full-width-pics)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-full-width-pics/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

import * as THREE from 'three';


import { FBXLoader } from './jsthree3D/jsm/loaders/FBXLoader.js';
import { GLTFLoader } from './jsthree3D/jsm/loaders/GLTFLoader.js';
import { DRACOLoader } from './jsthree3D/jsm/loaders/DRACOLoader.js';

import { OrbitControls } from './jsthree3D/jsm/controls/OrbitControls.js';


const screen_size = 200;

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


renderer.setSize( window.innerWidth -screen_size, window.innerHeight - screen_size );

 /// metodo que se repetira como animacion
const canvas = document.getElementById("3Dscreen");
canvas.appendChild( renderer.domElement );


    /**creacion de figura geometrica
      * 
      */
    const geometry = new THREE.BoxGeometry( 1, 1, 1 );
    const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
    const cube = new THREE.Mesh( geometry, material );
    scene.add( cube );



 window.addEventListener( 'resize', onWindowResize );



init();


function init(){




  

      /**
       * Posicion de la CAMARA
       */
      camera.position.set( 5, 2, 8 );



      /** Creacion de DirectionalLuminacion */
   //  const dirLight = new THREE.DirectionalLight( 0xffffff, 1.75 );
    //  dirLight.position.set( 0, 100, 10 );
    // dirLight.castShadow = true;
    // dirLight.shadow.camera.top = 180;
    // dirLight.shadow.camera.bottom = - 100;
    // dirLight.shadow.camera.left = - 120;
    // dirLight.shadow.camera.right = 120;
    //  scene.add( dirLight );


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
			loader.load( 'resources/3dmodelos/glb/arbol_roble.glb', function ( gltf ) {

				const model = gltf.scene;
                        //model.rotation.y = 30;
				 model.position.set( -3, -11, -9 );  // position arbol
                       // model.position.set( 3, 0.5, 5 );
				//model.scale.set( 0.5, 0.5, 0.5 );
				scene.add( model );

                        mixer = new THREE.AnimationMixer( model );
				mixer.clipAction( gltf.animations[ 0 ] ).play();


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



function onWindowResize() {

      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
   
      renderer.setSize( window.innerWidth , window.innerHeight );
   
   
   }   

      
function animate() {

      cube.rotation.x += 0.01;
	cube.rotation.y += 0.01;
      renderer.render( scene, camera );

	const delta = clock.getDelta();
      mixer.update( delta );

}


