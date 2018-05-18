<template lang="html">
  <div class="container">
    <div class="row card-box">
      <myform @save="view"></myform>
    </div>

    <div class="row">
      <div class="col-md-6">
        <ul class="list-group">
          <transition-group name="list-complete">
            <li v-for="(item) in items" :key=item.id class="list-group-item list-complete-item">
              <span @click.stop.prevent="viewDatail(item.id)">{{item.title}}</span>
              <time>{{item.date}}</time>
              <button @click.stop.prevent="deleteItem(item.id)">削除</button>
            </li>
          </transition-group>
        </ul>
      </div>
      <div class="col-md-6">
        <detail :id="detailId"></detail>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      items: null,
      detailId: 0,
    }
  },
  mounted: function() {
    this.view();
  },
  methods: {
    view: function() {
      axios.get('/api/entry')
      .then((res) => {
        this.items = res.data.data;
      });
    },
    viewDatail: function(id) {
      this.detailId = id;
    },
    deleteItem: function(id) {
      axios.delete('/api/entry/' + id)
      .then((res) => {
        this.view();
      });
    }
  }
}
</script>

<style lang="scss" scoped>
.row {
  margin-bottom:1em;
}
time {
  font-size:0.8em;
  &::before {
    content:"( ";
  }
  &::after {
    content: " )";
  }
}
.card {
  width:100%;
}


</style>
