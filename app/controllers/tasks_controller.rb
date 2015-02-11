class TasksController < ApplicationController
	def create
		task =  Task.new task_params
		task.user_id = current_user.id
		if task.save
			redirect_to root_path, notice: "Ok"
		else
			redirect_to root_path, alert: "arggggg"
		end
	end

	def destroy
		task = Task.find(params[:id])
		if task.destroy
			redirect_to root_path, notice: "Ok"
		else
			redirect_to root_path, alert: "arggggg"
		end
	end

	private

	def task_params
		params.require(:task).permit(:content)
	end
end
