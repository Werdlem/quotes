 <div class="jobSheet" >
            <div id="jobSheet">
             <h3 style="text-decoration: underline;">Job Sheet</h3>

<style>
@page{
    size: landscape;

}

table{
  width: 75%; 
  float: right;
}

th{
    border: 1px solid blue;
    text-align: right;
    font-size: 14px;
   
}
td{
    border: 1 px solid blue;
    text-align: left;
    font-size: 14px;
  
}
</style>

<div class="jobSheet">

    <table>

        <tr>
        <th>Name:</th>  <td>{name}</td>
            <th>Sheet Board Size:</th>  <td>{{boardWidth()}} x {{boardLength()}}</td>
            <th>Deckle:</th>    <td>{{boardWidth()}}</td>
            <th>Chop Crease:</th>   <td>{{boardLength() + 55}}</td>


            </tr>
            
            <tr>
        <th>Style:</th> <td>{{selectedStyle.name}}</td>
        <th>Grade:</th> <td>{{selectedFlute.type}}{{selectedGrade.type}}{{selectedLiner.grade}}</td>
        <th>Chop:</th>  <td>{{boardLength()}}</td>
        <th>Deckle Crease</th>  <td>{deckle crease}</td>
        
        </tr>
        
        <tr>
        <th>Internal Dimms:</th>    <td>{{length}}x{{breadth}}x{{height}}</td>
            <th>Flute:</th> <td>{{selectedFlute.type}}</td>
            <th></th>   <td></td>
            <th>Slit:</th>  <td>{slit}</td>
        </tr>

        <tr>
        <th>Finish:</th><td>{{selectedFinish.finish}}</td>
        <th>Quantity:</th><td>{{qty}}</td>
        </tr>
        </table>
         <p><img src="/css/images/dam.png"></p>
        <img ng-src="{{selectedStyle.image}}">

</div>
