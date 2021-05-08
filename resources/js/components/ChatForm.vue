<template>
  <div class="input-group">
    <input
      id="btn-input"
      type="text"
      name="message"
      class="form-control input-sm"
      required
      placeholder="Escreva Algo"
      v-model="newMessage"
      @keyup.enter="sendMessage"
    />

    <span class="input-group-btn">
      <button class="send-button" id="btn-chat" @click="sendMessage">
        Enviar
      </button>
    </span>
  </div>
</template>

<script>
export default {
  props: ["user"],

  data() {
    return {
      newMessage: "",
    };
  },

  methods: {
    sendMessage() {
      if (this.newMessage != "") {
        this.$emit("messagesent", {
          user: this.user,
          message: this.newMessage,
        });

        this.newMessage = "";
      }
    },
  },
};
</script>