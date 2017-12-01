<template>
		<div class="modal fade in modal-active modal-container" v-transition="">
			<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" @click="$emit('close')" class="close"><span >&times;</span></button>
							<h4 class="modal-title">
								{{name}}
							</h4>
						</div>
						<div class="modal-body">
								<slot></slot>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default mr-auto float-left" @click="$emit('close')">Charge</button>
							<button type="button" class="btn btn-primary">Cancel</button>
						</div>
				</div>
			</div>
		</div>
</template>

<script>
// new Vue({
// 	el: "#app",
// 	data: {
// 		showModal: false
// 	}
// });
export default {
        props: [
        	'name']
        }
</script>
