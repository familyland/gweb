particlesJS("particles-js", {
	"particles": {
		"number": {
			"value": 3,
			"density": {
				"enable": true,
				"value_area": 800
			}
		},
		"color": {
			"value": "#1b1e34"
		},
		"shape": {
			"type": "polygon",
			"stroke": {
				"width": 0,
				"color": "#1d295a"
			},
			"polygon": {
				"nb_sides": 6
			},
			"image": {
				"src": "img/github.svg",
				"width": 40,
				"height": 40
			}
		},
		"opacity": {
			"value": 0.8,
			"random": true,
			"anim": {
				"enable": false,
				"speed": 1,
				"opacity_min": 0.1,
				"sync": false
			}
		},
		"size": {
			"value": 30,
			"random": false,
			"anim": {
				"enable": true,
				"speed": 40,
				"size_min": 40,
				"sync": false
			}
		},
		"line_linked": {
			"enable": false,
			"distance": 200,
			"color": "#ffffff",
			"opacity": 1,
			"width": 2
		},
		"move": {
			"enable": true,
			"speed": 9,
			"direction": "none",
			"random": false,
			"straight": false,
			"out_mode": "out",
			"bounce": false,
			"attract": {
				"enable": false,
				"rotateX": 600,
				"rotateY": 1200
			}
		}
	},
	"interactivity": {
		"detect_on": "canvas",
		"events": {
			"onhover": {
				"enable": false,
				"mode": "grab"
			},
			"onclick": {
				"enable": false,
				"mode": "push"
			},
			"resize": true
		},
		"modes": {
			"grab": {
				"distance": 400,
				"line_linked": {
					"opacity": 1
				}
			},
			"bubble": {
				"distance": 400,
				"size": 40,
				"duration": 2,
				"opacity": 8,
				"speed": 3
			},
			"repulse": {
				"distance": 200,
				"duration": 0.4
			},
			"push": {
				"particles_nb": 4
			},
			"remove": {
				"particles_nb": 2
			}
		}
	},
	"retina_detect": true
});

var count_particles,  update;
//stats = new Stats;
//stats.setMode(0);
//stats.domElement.style.position = 'absolute';
//stats.domElement.style.left = '0px';
//stats.domElement.style.top = '0px';
//document.body.appendChild(stats.domElement);
count_particles = document.querySelector('.js-count-particles');
update = function() {
    //stats.begin();
    //stats.end();
	if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
		count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
	}
	requestAnimationFrame(update);
};
requestAnimationFrame(update);;
var footerNav = document.getElementById("footer-menus")
var child = footerNav.children
for (var i = 0, len = child.length; i < len; i++) {
    child[i].addEventListener('mouseover', function(e) {
        var t = e.target.parentNode.children;
        for (var i = 0, len = t.length; i < len; i++) {
            t[i].classList.remove('on')
        }
        e.target.classList.add('on')
    })
}

//var localeCurrent = document.getElementById('lcoale-nav')
//var localeChild = localeCurrent.children;
//var localtion = window.location.pathname.href;
//
//for (var i = 0, len = localeChild.length; i < len; i++) {
//    if (localeChild[i].dataset.locale === 'ja' || location.href.indexOf(localeChild[i].dataset.locale) != -1) {
//        localeChild[i].classList.add('current')
//    } else if (localeChild[i].dataset.locale === 'en' || location.href.indexOf(localeChild[i].dataset.locale) == -1){
//        localeChild[i].classList.add('current')
//    }
//}


(function() {
// Footer Canvas Animation
var SEPARATION = 100, AMOUNTX = 100, AMOUNTY = 70,
    container, stats,
    camera, scene, renderer,
    particles, particle, count = 0,
    mouseX = 0, mouseY = 0,
    windowHalfX = window.innerWidth / 2,
    windowHalfY = window.innerHeight / 2;

init();
animate();

function init() {
    container = document.createElement( 'div' );
    var target = document.getElementById("footer-canvas")
    target.appendChild( container );
    camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 10000 );
    camera.position.z = 10000;
    scene = new THREE.Scene();
    particles = new Array();
    var PI2 = Math.PI * 2;
    var material = new THREE.SpriteCanvasMaterial( {
        color: 0x1d295a, // Dot Color
        program: function ( context ) {
            context.beginPath();
            context.arc( 0, 0, 0.5, 0, PI2, true );
            context.fill();
        }
    });
    var i = 0;
    for ( var ix = 0; ix < AMOUNTX; ix ++ ) {
        for ( var iy = 0; iy < AMOUNTY; iy ++ ) {
            particle = particles[ i ++ ] = new THREE.Sprite( material );
            particle.position.x = ix * SEPARATION - ( ( AMOUNTX * SEPARATION ) / 2 );
            particle.position.z = iy * SEPARATION - ( ( AMOUNTY * SEPARATION ) / 2 );
            scene.add( particle );
        }
    }
    renderer = new THREE.CanvasRenderer();
    renderer.setPixelRatio( window.devicePixelRatio );
    var foot = document.getElementById('footer');
    //renderer.setSize( window.innerWidth, window.innerHeight );
    renderer.setSize( window.innerWidth, foot.offsetHeight );
    container.appendChild( renderer.domElement );
    // Left Top Stats
    //stats = new Stats();
    //stats.domElement.style.position = 'absolute';
    //stats.domElement.style.top = '0px';
    //container.appendChild( stats.domElement );
    window.addEventListener( 'resize', onWindowResize, false );
}

function onWindowResize() {
    windowHalfX = window.innerWidth / 2;
    windowHalfY = window.innerHeight / 2;
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth, window.innerHeight );
}

function animate() {
    requestAnimationFrame( animate );
    render();
    //stats.update();
}

function render() {
    camera.position.set(0,355,122);
    var i = 0;
    for ( var ix = 0; ix < AMOUNTX; ix ++ ) {
        for ( var iy = 0; iy < AMOUNTY; iy ++ ) {
            particle = particles[ i++ ];
            particle.position.y = ( Math.sin( ( ix + count ) * 0.3 ) * 50 ) +
                ( Math.sin( ( iy + count ) * 0.5 ) * 50 );
            particle.scale.x = particle.scale.y = ( Math.sin( ( ix + count ) * 0.3 ) + 1 ) * 4 +
                ( Math.sin( ( iy + count ) * 0.5 ) + 1 ) * 4;
        }
    }
    renderer.render( scene, camera );
    count += 0.1;
}
})();
