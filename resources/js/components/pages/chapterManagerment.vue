<template>
  <div id="chapter-manager">
    <div class="chapter-manager-header">
      <h5 class="title text-center">Danh sách chapter ({{items.length}} chapter)</h5>
    </div>
    <div class="chapter-manager-content container">
      <b-form-group>
        <b-input-group>
          <b-form-input id="filter-input" style="max-width: 350px" v-model="filter" type="search" placeholder="Tìm kiếm chapter"></b-form-input>
        </b-input-group>
      </b-form-group>
      <b-table small responsive bordered hover head-variant="light" :filter="filter" :filter-ignored-fields="ignoreFilter" primary-key="chapterId" :fields="fields" :items="items">
        <template #cell(Actions)="row">
          <div class="d-flex justify-content-center">
            <b-button variant="primary" size="sm" class="mr-1" v-b-tooltip.hover title="Load lại các câu hỏi" @click="reloadChapter(row.item.chapterId, $event)">
              <b-icon-arrow-clockwise></b-icon-arrow-clockwise>
            </b-button>
            <b-button variant="danger" size="sm" v-b-tooltip.hover title="Xóa các câu hỏi" @click="removeChapter(row.item.chapterId, $event)">
              <b-icon-trash></b-icon-trash>
            </b-button>
          </div>
        </template>
      </b-table>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "ChapterManager",
  data() {
    return{
      items: [],
      fields: [
        {key: 'chapterId', label:'Id', sortable: true},
        {key: 'chapterName', label:'Tên Chapter', sortable: true},
        {key: 'parentName', label:'Thuộc Mục', sortable: true},
        {key: 'numberOfQuestions', label:'Số Câu Hỏi', sortable: true},
          'Actions'
      ],
      filter: '',
      ignoreFilter: ['numberOfQuestions', 'Actions'],
    }
  }, 
  methods: {
    getListChapter(){
        axios.get(`/chapter-list`)
        .then(res => {
          this.items = res.data.data.map(item => {
            return {
                chapterId: item.id,
                chapterName: item.name,
                numberOfQuestions: item.questions_count,
                parentName: item.cate.name_cate,
            }
          })
        })
        .catch(err => {
          console.log(err);
        });
    },

    reloadChapter(id, e){
        const elm = e.target;
        elm.disabled = true;
        let params = {
            chapterId: id,
        };
        axios.post(`/reload-chapter`, params).then(res => {
            console.log(res);
            if (res.data.rc === "0"){
                alert(`Reload thành công ${id}`);
                location.reload();
            }
            else {
                alert('Reload thất bại');
                elm.disabled = false;
            }
        }).catch(err =>{
           alert('Reload thất bại');
           elm.disabled = false;
        })
    },

    removeChapter(id, e){
        const elm = e.target;
        elm.disabled = true;
        let params = {
            chapterId: id,
        };
        axios.post(`/delete-chapter-data`, params).then(res => {
            console.log(res);
            if (res.data.rc === "0"){
                alert(`Xóa thành công ${id}`);
                location.reload();
            }
            else {
                alert('Xóa thất bại');
                elm.disabled = false;
            }
                
        }).catch(err =>{
            alert('Xóa thất bại');
            elm.disabled = false;
        })
    }
  },
  created(){
    this.getListChapter();
  }

}
</script>

<style scoped>

</style>