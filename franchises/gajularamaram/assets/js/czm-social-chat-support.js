$('#example').czmChatSupport({

	/* Button Settings */
	button: {
		position: "left", /* left, right or false. "position:false" does not pin to the left or right */
		style: 1, /* Button style. Number between 1 and 7 */
		src: '<i class="ri-chat-1-fill"></i>', /* Image, Icon or SVG */
		backgroundColor: "#038137", /* Html color code */
		effect: 5, /* Button effect. Number between 1 and 7 */
		notificationNumber: "1", /* Custom text or false. To remove, (notificationNumber:false) */
		speechBubble: false, /* To remove, (speechBubble:false) */
		pulseEffect: true, /* To remove, (pulseEffect:false) */
		text: { /* For Button style larger than 1 */
			title: "Need help? Chat with us", /* Writing is required */
			description: false, /* To remove, (description:false) */
			online: "Now Online", /* To remove, (online:false) */
			offline: "I will be back soon" /* To remove, (offline:false) */
		}
	},

	/* Popup Settings */
	popup: {
		automaticOpen: false, /* true or false (Open popup automatically when the page is loaded) */
		outsideClickClosePopup: true, /* true or false (Clicking anywhere on the page will close the popup) */
		effect: 14, /* Popup opening effect. Number between 1 and 15 */
		header: {
			backgroundColor: "#038137", /* Html color code */
			title: "Need help? Chat with us", /* Writing is required */
			description: "Choose an account to get support" /* To remove, (description:false) */
		},

		/* Representative Settings */
		persons: [

		/* Copy for more representatives [::Start Copy::] */
		{
			avatar: {
				src: '<i class="ri-whatsapp-line"></i>', /* Image, Icon or SVG */
				backgroundColor: "#10c379", /* Html color code */
				onlineCircle: true /* Avatar online circle. To remove, (onlineCircle:false) */
			},
			text: {
				title: "Whatsapp", /* Writing is required */
				description: false, /* To remove, (description:false) */
				online: false, /* To remove, (online:false) */
				offline: false /* To remove, (offline:false) */
			},
			link: {
				desktop: "https://api.whatsapp.com/send?phone=7670907770", /* Writing is required */
				mobile: "https://api.whatsapp.com/send?phone=7670907770",
				// mobile: "https://wa.me/919000345742/?text=Hi" 
				/* If it is hidden desktop link will be valid. To remove, (mobile:false) */
			},
			onlineDay: {
				/* Change the day you are offline like this. (sunday:false) */
				sunday: "00:00-23:59",
				monday: "00:00-23:59",
				tuesday: "00:00-23:59",
				wednesday: "00:00-23:59",
				thursday: "00:00-23:59",
				friday: "00:00-23:59",
				saturday: "00:00-23:59"
			}
		},
		/* [::End Copy::] */

		/* Copy for more representatives [::Start Copy::] */
		{
			avatar: {
				src: '<i class="ri-mail-line"></i>', /* Font, Image or SVG */
				backgroundColor: "#FF643A", /* Html color code */
				onlineCircle: false /* Avatar online circle. To remove, (onlineCircle:false) */
			},
			text: {
				title: "E-mail", /* Writing is required */
				description: false, /* Custom text or false. To remove, (description:false) */
				online: false, /* Custom text or false. To remove, (online:false) */
				offline: false /* Custom text or false. To remove, (offline:false) */
			},
			link: {
				desktop: "mailto:Admissions_bachupally@pallavimodelschools.org", /* Writing is required */
				mobile: false /* If it is hidden desktop link will be valid. To remove, (mobile:false) */
			},
			onlineDay: {
				/* Change the day you are offline like this. (sunday:false) */
				sunday: "00:00-23:59",
				monday: "00:00-23:59",
				tuesday: "00:00-23:59",
				wednesday: "00:00-23:59",
				thursday: "00:00-23:59",
				friday: "00:00-23:59",
				saturday: "00:00-23:59"
			}
		},
		/* [::End Copy::] */

		/* Copy for more representatives [::Start Copy::] */
		{
			avatar: {
				src: '<i class="ri-phone-line"></i>', /* Font, Image or SVG */
				backgroundColor: "#4EB625", /* Html color code */
				onlineCircle: false /* Avatar online circle. To remove, (onlineCircle:false) */
			},
			text: {
				title: "Call", /* Writing is required */
				description: false, /* Custom text or false. To remove, (description:false) */
				online: false, /* Custom text or false. To remove, (online:false) */
				offline: false /* Custom text or false. To remove, (offline:false) */
			},
			link: {
				desktop: "tel:+917670907770", /* Writing is required */
				mobile: "tel:+917670907770" /* If it is hidden desktop link will be valid. To remove, (mobile:false) */
			},
			onlineDay: {
				/* Change the day you are offline like this. (sunday:false) */
				sunday: "00:00-23:59",
				monday: "00:00-23:59",
				tuesday: "00:00-23:59",
				wednesday: "00:00-23:59",
				thursday: "00:00-23:59",
				friday: "00:00-23:59",
				saturday: "00:00-23:59"
			}
		},
		/* [::End Copy::] */
		]
	},

	/* Other Settings */
	sound: true, /* true (default sound), false or custom sound. Custom sound example, (sound:'assets/sound/notification.mp3') */
	changeBrowserTitle: false, /* Custom text or false. To remove, (changeBrowserTitle:false) */
	cookie: false, /* It does not show the speech bubble, notification number, and pulse effect again for the specified time. For example, do not show for 1 hour, (cookie:1) or to remove, (cookie:false) */
});