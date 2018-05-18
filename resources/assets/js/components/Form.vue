<template lang="html">
  <div class="card">
    <div class="card-header">
      新規登録
    </div>
    <div class="card-body">
      <form action="">
        <div class="form-group">
          <label for="exampleInputEmail1">タイトル</label>
          <input type="text" class="form-control" id="text" v-model="title">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">内容</label>
          <textarea class="form-control" id="content" v-model="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" @click.prevent.stop="save">登録</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      title : '',
      content: '',
    }
  },
  methods: {
    save: function() {
      axios.post('/api/entry',{
        title: this.title,
        content: this.content,
      })
      .then((res) => {
        this.title = '';
        this.content = '';
        this.$emit('save');
      });
    }
  }
}
</script>

<style lang="scss">
</style>
