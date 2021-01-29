gsap.timeline({
			     scrollTrigger: {
				    			 trigger: ".namebox",
				    			 start: "center center",
							    end: "bottom top",
						 	    markers: false,
					       scrub: true,
							    pin: true
		   		  }
})
.from("h2", { x : innerWidth * 1 })
gsap.timeline({
				   scrollTrigger: {
								   trigger: ".box2",
								   start: "center center",
								   end: "bottom top",
								   markers: false,
								   scrub: true,
								   pin: true
				   }
})
.from(".box2", { opacity : 0 })
.from(".textx", { x : innerWidth * 1 })