/**
 * Created by User on 09.10.2017.
 */
/**
 * Created by User on 11.09.2017.
 */
Ext.override(MODx.panel.Resource,{
	getParentMainLeftFields: MODx.panel.Resource.prototype.getMainLeftFields,

	getMainLeftFields: function(config){
		var parentMainLeftFields = this.getParentMainLeftFields.call(this,config);

		parentMainLeftFields.push(
			{
				html: '<h4>Укажите информацию о матче</h4>'
				,bodyCssClass: 'panel-desc'
				,border: false
			},
			{
				xtype: 'textfield'
				,fieldLabel: 'Полное название соревнований'
				,description: '[[*b_name]]<br>Введите название'
				,name: 'b_name'
				,id: 'modx-resource-b_name'
				,maxLength: 100
				,anchor: '100%'
				,value: config.record.b_name || ''
			},{
				xtype: 'textfield'
				,fieldLabel: 'Место проведения'
				,description: '[[*b_location]]<br>Введите место проведения'
				,name: 'b_location'
				,id: 'modx-resource-b_location'
				,maxLength: 100
				,anchor: '100%'
				,value: config.record.b_location || ''
			},{
				layout:'column'
				,border: false
				,anchor: '100%'
				,defaults: {
					labelSeparator: ''
					,labelAlign: 'top'
					,border: false
					,layout: 'form'
					,msgTarget: 'under'
				}
				,items:[{
					columnWidth: .5
					,id: 'modx-resource-main-left-left'
					,defaults: { msgTarget: 'under' }
					,items: [{
						xtype: 'textfield'
						,fieldLabel: 'Команда 1'
						,description: '[[*b_team1]]<br>Введите название команды 1'
						,name: 'b_team1'
						,id: 'modx-resource-b_team1'
						,maxLength: 100
						,anchor: '100%'
						,value: config.record.b_team1 || ''
					},{
						xtype: 'textfield'
						,fieldLabel: 'Населенный пункт команды 1'
						,description: '[[*b_team1_city]]<br>Введите населенный пункт команды 1'
						,name: 'b_team1_city'
						,id: 'modx-resource-b_team1_city'
						,maxLength: 100
						,anchor: '100%'
						,value: config.record.b_team1_city || ''
					},{
						xtype: 'textfield'
						,fieldLabel: 'Счёт команды 1'
						,description: '[[*b_team1_score]]<br>Введите счёт команды 1'
						,name: 'b_team1_score'
						,id: 'modx-resource-b_team1_score'
						,maxLength: 100
						,anchor: '100%'
						,value: config.record.b_team1_score || ''
					}]
				},{
					columnWidth: .5
					,id: 'modx-resource-main-left-right'
					,defaults: { msgTarget: 'under' }
					,items: [{
						xtype: 'textfield'
						,fieldLabel: 'Команда 2'
						,description: '[[*b_team2]]<br>Введите название команды 2'
						,name: 'b_team2'
						,id: 'modx-resource-b_team2'
						,maxLength: 100
						,anchor: '100%'
						,value: config.record.b_team2 || ''
					},{
						xtype: 'textfield'
						,fieldLabel: 'Населенный пункт команды 2'
						,description: '[[*b_team2_city]]<br>Введите населенный пункт команды 2'
						,name: 'b_team2_city'
						,id: 'modx-resource-b_team2_city'
						,maxLength: 100
						,anchor: '100%'
						,value: config.record.b_team2_city || ''
					},{
						xtype: 'textfield'
						,fieldLabel: 'Счёт команды 2'
						,description: '[[*b_team2_score]]<br>Введите счёт команды 2'
						,name: 'b_team2_score'
						,id: 'modx-resource-b_team2_score'
						,maxLength: 100
						,anchor: '100%'
						,value: config.record.b_team2_score || ''
					}]
				}]
			}
		);

		return parentMainLeftFields;
	}
});